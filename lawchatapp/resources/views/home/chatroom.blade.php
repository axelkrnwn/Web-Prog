<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat room page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('styles/main.css') }}>
</head>
<body style="background-color: #f5f5f5; height: 100vh; display: flex; widows: 100vw;">
    <div id = "sidebar" style="display: none; width: 30%; background-color: #CBB9B9; height: 100vh;">
        <x-sidebar></x-sidebar>
    </div>
    <div class="pb-2" style="width: 100%">
        <div class="p-2">
            <div class="d-flex flex-col align-items-center justify-content-between w-25">
                <div class="menu-button" id = "menu-button">
                    <div class="rectangle"><span></span></div>
                    <div class="rectangle"><span></span></div>
                    <div class="rectangle"><span></span></div>
                </div>
                <h4 class="title">HukumKU Bot</h4>
            </div>

        </div>


        <div style="position: relative; height: 80%; width: 100%; box-sizing: border-box">
            <div class="px-5 mx-5" style="overflow-y: scroll; height: 100%;">
                @isset($chats)
                    @foreach ($chats as $chat)
                        @if ($chat->is_generated == 0)
                            <div class="d-flex justify-content-end">
                                <div class="user-chat py-2">
                                    <p class="px-3 h6">{{$chat->content}}</p>
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


            <div class="px-5 flex justify-content-center absolute-bottom">
                <form class="prompt px-3 mx-5" method="POST" action="/chat/{{$id}}">
                    @csrf
                    <input type="text" placeholder="Message HukumKU Bot" class="bg-transparent border-0 text-black w-100" name="content">
                    <button type="submit" class="bg-transparent border-0 prompt-button">
                        <img src={{ asset('assets/arrow-right.png') }} alt="" style="width: 100%; height: 100%;">
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
</script>
</html>
