<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat room page</title>
    <link rel="icon" href="{{ asset('assets/web_icon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
</head>
<body style="background-color: #f5f5f5 w-100 h-100">
    <div class="d-flex w-100">
        <div style="width: 40%; height: 100vh; display: none" id="sidebar">
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
        </div>
        <div class="w-100" style="height: 85vh">
            <div class="w-100">
                <div class="d-flex my-2 flex-col align-items-center justify-content-between w-100">
                    <div class="menu-button" id="menu-button">
                        <div class="rectangle"><span></span></div>
                        <div class="rectangle"><span></span></div>
                        <div class="rectangle"><span></span></div>
                    </div>
                    <h1 class="title">HukumKU Bot</h1>
                    <form action="/logout" method="post" class="ms-auto">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <img src="{{ asset('assets/logout_icon.png') }}" alt="Logout">
                        </button>
                    </form>
                </div>
            </div>

            <div style="position: relative; height: 80%; width: 100%; box-sizing: border-box">
                <div class="px-5 mx-5" style="overflow-y: scroll; height: 100%;">
                    @isset($chats)
                        @foreach ($chats as $chat)
                            @if ($chat->is_generated == 0)
                                <div class="d-flex justify-content-end">
                                    <div class="user-chat py-2" id = "chat">
                                        <input class="px-3 h6 w-100" style="border: none; background: none;" value="{{$chat->content}}"/>
                                    </div>
                                </div>
                            @else
                                <div class="d-flex justify-content-start my-2">
                                    <div class="bot-chat py-2">
                                        <p class="px-3 h6">{{$chat->content}}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>

            <div class="px-5 py-5 flex justify-content-center absolute-bottom">
                <form class="prompt px-3 mx-5" method="POST" action={{"/chat/".$id}}>
                    @csrf
                    <input type="text" placeholder="Message HukumKU Bot" name="content" class="bg-transparent border-0 text-black w-100">
                    <button type="submit" class="bg-transparent border-0 prompt-button">
                        <img src="{{ asset('assets/arrow-right.png') }}" alt="" style="width: 90%; height: 100%;">
                    </button>
                </form>
            </div>

        </div>
        </div>


</body>
<script>
    document.getElementById('menu-button').addEventListener('click', () => {
        document.getElementById('sidebar').style.display = document.getElementById('sidebar').style.display == 'none'?'block':'none'
    })
    document.getElementById('')
</script>
</html>
