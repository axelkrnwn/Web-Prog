<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
    <link rel="icon" href="{{ asset('assets/web_icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('styles/landing.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="{{ asset('assets/logo.png') }}" alt="HukumKU Bot Logo" style="width: auto; height: 50px; max-width: 100%;">
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
            <p>Perkenalkan <strong>HukumkuBot</strong> – model AI yang dirancang untuk berinteraksi dengan pengguna secara percakapan. HukumkuBot dapat menjawab pertanyaan lanjutan, mengakui kesalahan, menantang premis yang salah, dan menolak permintaan yang tidak pantas, menciptakan pengalaman yang interaktif dan informatif.</p>
            <p>Sebagai model saudara dari InstructGPT, HukumkuBot dilatih untuk mengikuti instruksi dalam sebuah prompt dan memberikan respons yang terperinci. Kemampuannya dalam menangani percakapan memungkinkan pertukaran informasi yang dinamis tentang topik hukum.</p>
            <p>Kami sangat antusias memperkenalkan HukumkuBot dan mengundang Anda untuk memberikan masukan yang berharga untuk membantu kami meningkatkan kemampuannya. Selama masa pengembangan ini, Anda bisa menggunakan HukumkuBot sepenuhnya gratis.</p>
        </div>
    </main>

    {{-- <div class="try-now-container">
        <a href="#" class="button try-now">Try Now!</a>
    </div> --}}
</body>
</html>
