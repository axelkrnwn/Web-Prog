# HukumBot
An AI-based chatbot that provides information related to Indonesia's UU ITE Law.  
Designed to contribute to **SDG 16: Peace, Justice, and Strong Institutions** by promoting access to legal information and supporting the rule of law in Indonesia.  
HukumBot helps users understand their rights and responsibilities under the law, ensuring transparency, reducing legal barriers, and fostering justice through accessible legal information. By providing easy access to legal knowledge, it supports stronger institutions and promotes peace through informed decision-making.

## Key Features
- Answers questions related to UU ITE law.
- Provides legal summaries using Retrieval-Augmented Generation (RAG).
- Web interface built with Laravel and MySql as the database.

## How RAG Works
**Retrieval-Augmented Generation (RAG)** is a method that enhances the chatbot’s ability to provide accurate and context-aware responses. It combines information retrieval and text generation to deliver high-quality, relevant answers.

![RAG Diagram](https://github.com/user-attachments/assets/1d83e588-ae85-4a13-9abe-c25483bc5154)  
*Image Source: [CodingScape](https://codingscape.com/blog/rag-101-what-is-rag-and-why-does-it-matter)*

## Requirements
  - Python 3.8 or higher
  - Laravel 11.x
  - Node 21.7.1 or higher

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/axelkrnwn/Web-Prog.git

2. Navigate to the project directory:
   ```bash
   cd lawchatapp

3. Install Laravel dependencies:
   ```bash
   composer install

4. Back to root and locate model file
   ```bash
   cd ../model

5. Install Python dependencies:
   ```bash
   pip install -r requirements.txt

## Usage

### 1. Run the AI Model

Navigate to the `model` directory and run the AI model:

1. Run the AI model:
   ```bash
   python app.py

### 2. Set Up the Web Application

Navigate to the `lawchatapp` directory and follow these steps:

1. Compile Bootstrap assets for the frontend:
   ```bash
   npm run dev
   
2. Run database migrations (this will reset the database):
   ```bash
   php artisan migrate:fresh

3. Start the Laravel backend server:
   ```bash
   php artisan serve

4. Open the application in your browser:
   ```bash
   http://localhost:8080

## Application Preview

### 1. **Home Page**

The home page introduces the application and allows users to navigate to the login/register page.

![Home Page Screenshot](path/to/homepage-screenshot.png)

### 2. **Login / Register Page**

Users can log in or register to access the chatbot functionalities.

![Login/Register Screenshot](path/to/login-register-screenshot.png)

### 3. **Chatting Interface**

Once logged in, users can interact with the chatbot to get information about the law.

![Chatting Interface Screenshot](path/to/chatting-screenshot.png)

### 4. **Live Demo**

To try the application live, visit:  
[Live Application](http://example)

---

Feel free to explore the different features of the app by logging in and using the chat functionalities.

## Database Schema

Here is the **Entity-Relationship Diagram (ERD)** for the application's database schema:

![erds](https://github.com/user-attachments/assets/d3f67bf7-a1e9-40b2-8e10-d68990bbe60b)

Explanation:
- **User**: Stores user information such as login credentials.
- **Chatroom**: Stores chat logs, representing individual chat sessions or histories.
- **Chat**: Contains the individual messages within each **Chatroom**, including the legal summaries and information provided by the chatbot.

## Contact

### 1. Frederick Chandra
- **Github**: [Frederick Chandra's Github](https://github.com/frederick542)  
  *Frederick contributed to **AI development** and assisted with the **design** of the application.*

### 2. Axel Kurniawan
- **Github**: [Axel Kurniawan's Github](https://github.com/axelkrnwn)  
  *Axel was responsible for developing the **chat interface** and implementing its core **functionality**.*

### 3. Bryan Jo
- **Github**: [Bryan Jo's Github](https://github.com/brynnjoo)  
  *Bryan handled the implementation of **user authentication**, including the **login** and **registration** features.*

### 4. Eugene Emmanuelle Hervine
- **Github**: [Eugene's Github](https://github.com/EugeneHervine)  
  *Eugene was responsible for the **overall design** of the application, including the **UI/UX** and user-facing interface.*


