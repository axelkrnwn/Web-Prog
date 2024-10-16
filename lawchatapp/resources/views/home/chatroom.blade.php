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
<body style="background-color: #f5f5f5">
    <div class="p-2">
        <div class="d-flex flex-col align-items-center justify-content-between w-25">
            <div class="menu-button">
                <div class="rectangle"><span></span></div>
                <div class="rectangle"><span></span></div>
                <div class="rectangle"><span></span></div>
            </div>
            <h1 class="title">HukumKU Bot</h1>
        </div>

    </div>

    <div class="px-5 py-2 mx-5">
        <div class="d-flex justify-content-end">
            <div class="user-chat py-2">
                <p class="px-3 h6">Hi, how are you?</p>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <div class="bot-chat py-2">
                <p class="px-3 h6">Hi, i'm fine!</p>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="user-chat py-2">
                <p class="px-3 h6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laudantium possimus sed corporis repellat excepturi nesciunt explicabo quod quidem tempora, fuga deserunt nisi? Labore magnam explicabo aut accusantium velit id!</p>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="bot-chat py-2">
                <p class="px-3 h6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In unde autem placeat molestiae eius dolorum dolores hic repudiandae odio distinctio!</p>
            </div>
        </div>
    </div>


    <div class="px-5 py-5 flex justify-content-center fixed-bottom">
        <form class="prompt px-3 mx-5">
            <input type="text" placeholder="Message HukumKU Bot" class="bg-transparent border-0 text-black w-100">
            <button type="submit" class="bg-transparent border-0 prompt-button">
                <img src={{ asset('assets/arrow-right.png') }} alt="" style="width: 100%; height: 100%;">
            </button>
        </form>
    </div>

</body>
</html>
