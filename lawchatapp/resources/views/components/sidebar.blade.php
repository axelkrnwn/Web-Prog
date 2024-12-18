<div class="p-2" style="display: flex; flex-direction: column; row-gap: 10px">
   <div class="d-flex justify-content-between align-items-center" style="gap: 16px;">
        <h4 style="color: white;">Recent Chats</h4>
        <a href="/chat/">
            <img src="{{ asset('assets/new_chat.png') }}" alt="Add New Chat" style="width: 25px; height: 25px;">
        </a>
    </div>
    <div style="display: flex; flex-direction: column; row-gap: 2%;">
        @isset($history)
            @foreach ($history as $hist)
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 4px; margin-bottom: 4px;">
                <a href="{{ '/chat/' . $hist->id }}" class="text-truncate text-decoration-none text-light fw-bold" style="width: 70%; display: block;">
                    {{ strlen($hist->chat[0]->content) > 30 ? substr($hist->chat[0]->content, 0, 27) . "..." : $hist->chat[0]->content }}
                </a>
                <form action={{"/chat/".$hist->id}} method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger d-flex align-items-center">
                        <i class="bi bi-trash me-1"></i> Delete
                    </button>
                </form>
            </div>

            @endforeach

        @endisset
    </div>
</div>
