<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BetterMe</title>

		<link href="{{asset('css/landingpage.css')}}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    </head>
    <body>
        <header>
            <a id="img-link" href="{{action([App\Http\Controllers\LandingPageController::class, 'index'])}}">
            <div class="logo-box">
                    <img id="img-link" src="{{asset('images/logo.png')}}" alt="BetterMe Logo" height="70" class="logo">
            </div>            
            </a>
            <nav class="navbar">
                 <a href="{{action([App\Http\Controllers\LandingPageController::class, 'index'])}}">About</a>
                <a href="{{action([App\Http\Controllers\MotivationController::class, 'index'])}}">Motivation</a>
                <a href="{{action([App\Http\Controllers\RegisterController::class, 'index'])}}">Sign Up</a>
            </nav>
        </header>
        <form method="POST" action="{{ action([App\Http\Controllers\LoginController::class, 'store']) }}">
            @csrf
            <div class="container">
                <h1>Sign In</h1>
                <p>Enter your credentials to sign in.</p>

                <div class="fields">

                    <label for="email"><b>Email/Username</b></label>
                    <input type="text" placeholder="Enter Email or Username" name="email" id="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                    <span class="error">@if(strlen($loginFail) != 0) {{$loginFail}} @endif</span><br>

                    <div class="btnBox"><button type="submit" class="btn">Sign In</button></div>
                </div>
            </div>
  
                <p>Don't have an account? <a href="{{action([App\Http\Controllers\RegisterController::class, 'index'])}}">Sign Up</a>.</p>
        </form>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>