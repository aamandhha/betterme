<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BetterMe</title>

		<link href="{{asset('css/landingpage.css')}}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <script src="{{asset('js/registerValidation.js')}}"></script>

    </head>
    <body>
        <header>
            <a id="img-link" href="{{action([App\Http\Controllers\LandingPageController::class, 'index'])}}">
                <img id="img-link" src="{{asset('images/logo.png')}}" alt="BetterMe Logo" height="70" class="logo">
            </a>
            <nav class="navbar">
                <a href="#services">Services</a>
                <a href="{{action([App\Http\Controllers\MotivationController::class, 'index'])}}">Motivation</a>
                <a href="{{action([App\Http\Controllers\LoginController::class, 'index'])}}">Sign In</a>
            </nav>
        </header>
        <form method="POST" action="{{ action([App\Http\Controllers\RegisterController::class, 'store']) }}">
            @csrf
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <div class="fields">
                    <label for="fullname"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                    <span class="error"></span><br>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>
                    <span class="error">
                        @if(strlen($dublUsername) != 0) {{$dublUsername}} @endif
                    </span><br>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required>
                    <span class="error">
                        @if(strlen($dublEmail) != 0) {{$dublEmail}} @endif
                    </span><br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                    <span class="error"></span><br>

                    <label for="psw_repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
                    <span class="error"></span><br>

                    <p>By creating an account you agree to our Terms & Privacy.</p>
                    <div class="btnBox"><button type="submit" class="btn">Register</button></div>
                </div>
            </div>
  
            <div class="signin">
                <p>Already have an account? <a href="{{action([App\Http\Controllers\LoginController::class, 'index'])}}">Sign in</a>.</p>
            </div>
        </form>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>