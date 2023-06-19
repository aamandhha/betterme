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
                <a href="#about">About</a>
                <a href="#motivation">Motivation</a>
                <a href="#sign_up">Sign Up</a>
                <a href="#sign_in">Sign In</a>
            </nav>
        </header>
        <div class="main">
            <h1>About BetterMe</h1>
            <p class="about">
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or 
                double click me to add your own content and make changes to the font. Feel free to drag and drop me 
                anywhere you like on your page. I’m a great place for you to tell a story and let your users know a 
                little more about you.
            </p>
             
        </div>      
    </body>
</html>
