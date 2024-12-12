import os
import traceback
from typing import List
from langchain import hub
from dotenv import load_dotenv
from langchain_openai import ChatOpenAI
from flask import Flask, request, jsonify
from langchain_openai import OpenAIEmbeddings
from langgraph.graph import START, StateGraph
from langchain_community.vectorstores import FAISS
from langchain_community.document_loaders import PyPDFLoader
from langchain_text_splitters import RecursiveCharacterTextSplitter

load_dotenv()

openai_api_key = os.getenv("OPENAI_API_KEY")
os.environ["OPENAI_API_KEY"] = openai_api_key

llm = ChatOpenAI(model="gpt-3.5-turbo")
embeddings = OpenAIEmbeddings(model="text-embedding-ada-002")

pdf_path = "DatasetUU/UU_NO_1_2024.pdf"
loader = PyPDFLoader(pdf_path)
docs = loader.load()

text_splitter = RecursiveCharacterTextSplitter(chunk_size=500, chunk_overlap=200)
all_splits = text_splitter.split_documents(docs)

vector_store = FAISS.from_documents(all_splits, embedding=embeddings)
prompt = hub.pull("rlm/rag-prompt")

class State(dict):
    question: str
    context: List[dict]
    answer: str

def retrieve(state: dict):
    try:
        retrieved_docs = vector_store.similarity_search(state["question"])
        return {"context": retrieved_docs}
    except Exception as e:
        print(f"Retrieval error: {e}")
        traceback.print_exc()
        return {"context": []}

def generate(state: dict):
    
    print("Generating answer...")  # Debug print
    try:
        docs_content = "\n\n".join(doc.page_content for doc in state["context"])
        messages = prompt.invoke({"question": state["question"], "context": docs_content})
        response = llm.invoke(messages)
        
        return {"answer": response.content}
    except Exception as e:
        traceback.print_exc()
        return {"answer": "Error generating response"}

graph_builder = StateGraph(State).add_sequence([retrieve, generate])
graph_builder.add_edge(START, "retrieve")
graph = graph_builder.compile()

app = Flask(__name__)

@app.route('/ask', methods=['POST'])
def ask_question():
    try:
        print(f"Received request: {request.json}")
        
        data = request.json
        question = data.get('question')
        
        if not question:
            return jsonify({"error": "No question provided"}), 400
        
        response = graph.invoke({"question": question})
        
        print(response)
        print(f"Response generated: {response.get('answer', 'No answer')}")
        
        return jsonify({
            "answer": response.get('answer', 'No response')
        })
    
    except Exception as e:
        print(f"Unhandled error: {e}")
        traceback.print_exc()
        return jsonify({
            "error": str(e),
            "status": "error"
        }), 500

@app.route('/health', methods=['GET'])
def health_check():
    return jsonify({"status": "healthy"}), 200

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)