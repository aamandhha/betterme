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
            <div class="btnBox">
                <button class="btn">Sign up</btton>
            </div>      
        </div>  
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="text">make yourself PROUD</div>
            </div>

            <div class="mySlides fade">
                <div class="text">your potential to succeed is INFINITE</div>
            </div>

            <div class="mySlides fade">
                <div class="text">you will never always be motivated, so you must learn to always be DISCIPLINED</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>  
    </body>
    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</html>
