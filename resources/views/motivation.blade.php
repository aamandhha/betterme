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
            <img src="{{asset('images/logo.png')}}" alt="BetterMe Logo" height="70" class="logo">
            <nav class="navbar">
                <a href="#services">Services</a>
                <a href="#motivation">Motivation</a>
                <a href="#sign_up">Sign Up</a>
                <a href="#sign_in">Sign In</a>
            </nav>
        </header>

        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>