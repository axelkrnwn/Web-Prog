<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
    <link rel="stylesheet" href={{ asset('styles/landing.css') }}>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src={{ asset('assets/logo.png') }} alt="HukumKU Bot Logo" style="width: 50px; height:60px">
            <h2>HukumKU Bot</h2>
        </div>
        <div class="nav-buttons">
            <a href="/login" class="button">Login</a>
            <a href="/register" class="button">SignUp</a>
        </div>
    </header>

    <main class="main-content">
        <div class="date">SEPTEMBER 2024</div>

        <h1>INTRODUCING HUKUMKU BOT</h1>

        <div class="content">
            <p>We've trained a model called HukumkuBot which interacts in a conversational way. The dialogue format makes it possible for HukumkuBot to answer follow-up questions, admit its mistakes, challenge incorrect premises, and reject inappropriate requests.</p>
            <p>HukumkuBot is a sibling model to InstructGPT, which is trained to follow an instruction in a prompt and provide a detailed response.</p>
            <p>We are excited to introduce HukumkuBot to get users' feedback and learn about its strengths and weaknesses. During the research preview, usage of HukumkuBot is free. Try it now at HukumkuBot.com</p>
        </div>
    </main>

    {{-- <div class="try-now-container">
        <a href="#" class="button try-now">Try Now!</a>
    </div> --}}
</body>
</html>
