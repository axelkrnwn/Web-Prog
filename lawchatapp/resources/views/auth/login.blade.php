<x-guest-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
    </head>

    <div class="container">
        <div class="burger-menu" id="burgerMenu">
            &#9776;
        </div>

        <ul class="nav-links-mobile" id="navLinksMobile">
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <h1>Welcome Back!</h1>

        @if (session('status'))
            <div class="session-status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="input-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>

            <button type="submit" class="btn-submit">Login</button>

            <p class="sign-up">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>

            <div class="or-divider">OR</div>

            <div class="social-login">
                <!-- Login pake Google -->
                <a href="{{ route('google.login') }}" class="social-btn google-btn">
                    <img src="{{ asset('assets/google.png') }}" alt="Google Icon"> Continue with Google
                </a>
            </div>
        </form>
    </div>

    <script>
        const burgerMenu = document.getElementById('burgerMenu');
        const navLinksMobile = document.getElementById('navLinksMobile');

        burgerMenu.addEventListener('click', () => {
            navLinksMobile.classList.toggle('burger-active');
        });
    </script>
</x-guest-layout>
