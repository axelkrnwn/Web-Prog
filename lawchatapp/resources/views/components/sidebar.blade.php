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

            <a href={{"/chat/".$hist->id}}>
                {{$hist->chat[0]->content}}
            </a>
            @endforeach

        @endisset
    </div>
</div>
