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
                <img id="img-link" src="{{asset('images/logo.png')}}" alt="BetterMe Logo" height="70" class="logo">
            </a>
            <nav class="navbar">
                <a href="#services">Services</a>
                <a href="{{action([App\Http\Controllers\MotivationController::class, 'index'])}}">Motivation</a>
                <a href="#sign_up">Sign Up</a>
                <a href="#sign_in">Sign In</a>
            </nav>
        </header>
        <form action="/action_page.php">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <div class="fields">
                    <label for="fullname"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

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