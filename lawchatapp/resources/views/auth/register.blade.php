<x-guest-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('styles/register.css') }}">
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

        <h1>Create Account</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

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

            <div class="input-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-submit">Register</button>

            <p class="sign-up">Already Have an Account? <a href="{{ route('login') }}">Login</a></p>

            <div class="or-divider">OR</div>

            <div class="social-login">
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
