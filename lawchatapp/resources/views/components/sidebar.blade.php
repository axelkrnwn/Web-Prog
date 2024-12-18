<div class="p-3" style="display: flex; flex-direction: column; row-gap: 10px">
    <div class="d-flex">
        <form action="/logout" method="post">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
        <a href="/chat/">
            <button class="btn btn-info">Add New Chat</button>
        </a>
    </div>
    <h4 style="color: white">Recent Chats</h4>
    <div style="display: flex; flex-direction: column; row-gap: 2%;">
        @isset($history)
            @foreach ($history as $hist)
            <div style="display: flex; justify-content: space-between; align-items: center">
                <a style="width: 70%;" href={{"/chat/".$hist->id}}>
                    {{strlen($hist->chat[0]->content) > 30? substr($hist->chat[0]->content,0,27)."..." :$hist->chat[0]->content}}
                </a>
                <form action={{"/chat/".$hist->id}} method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Del</button>
                </form>
            </div>

            @endforeach

        @endisset
    </div>
</div>
