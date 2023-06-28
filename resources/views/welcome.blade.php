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
                <a href="{{action([App\Http\Controllers\LoginController::class, 'index'])}}">Sign In</a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'])}}">Habbits</a>
                <a href="{{action([App\Http\Controllers\ProfileController::class, 'index'])}}">Profile</a>
            </nav>
        </header>
        <div class="main">
            <h1>About BetterMe</h1>
            <p class="about">
                Embrace positive change and unleash your true potential with our innovative platform designed to help you build and maintain 
                healthy habits. Whether you're aiming to adopt a new fitness routine, improve your productivity, or enhance your overall well-being, 
                our habit tracker has got you covered.
            </p>
            <p class="about">
                Don't let your goals remain distant dreams. Take charge of your life and embark on a transformative journey. Embrace positive change, 
                cultivate lasting habits, and unlock the best version of yourself.
            </p>
            <p class="about2">
                <b>Start tracking your way to success today!</b>
            </p>
            <div class="btnBox">
                <a class = "link" href="{{action([App\Http\Controllers\RegisterController::class, 'index'])}}"><button class="btn">Sign up</btton></a>
            </div>      
        </div>  
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="text">make yourself <b>PROUD</b></div>
            </div>

            <div class="mySlides fade">
                <div class="text">your potential to succeed is <b>INFINITE</b></div>
            </div>

            <div class="mySlides fade">
                <div class="text">you will never always be motivated, so you must learn to always be <b>DISCIPLINED</b></div>
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
        <div class="main">
            <h2 id="services">Services</h2>
            <div class="row">
                <div class="column">
                    <div class="pic_container"><img src="{{asset('images/pic1.png')}}" alt="Pic 1" height="120" class="pic"></div>
                    <h3>Habbit Tracker</h3>
                    <p>
                        Track your habits effortlessly with our intuitive interface. Simply set your goals,
                        input your progress, and watch your daily accomplishments come to life.
                    </p>
                </div>
                <div class="column">
                    <div class="pic_container"><img src="{{asset('images/pic2.png')}}" alt="Pic 1" height="100" class="pic"></div>
                    <h3>Progress Tracking</h3>
                    <p>
                        Visualize your progress through insightful charts and graphs, empowering you to stay motivated and focused.
                    </p>
                </div>
                <div class="column">
                    <div class="pic_container"><img src="{{asset('images/pic3.png')}}" alt="Pic 1" height="100" class="pic"></div>
                    <h3>Customization Options</h3>
                    <p>
                        Tailor your habit-tracking experience to suit your unique needs. Our flexible platform allows you to create 
                        personalized habit plans, enabling you to target specific areas of your life that you wish to improve.
                    </p>
                </div>
            </div> 
            <h2>Reach your goals</h2>  
        </div>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
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
