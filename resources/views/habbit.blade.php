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
                <a href="{{action([App\Http\Controllers\RegisterController::class, 'index'])}}">Sign Up</a>
                <a href="{{action([App\Http\Controllers\LoginController::class, 'index'])}}">Sign In</a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'])}}">Habbits</a>
            </nav>
        </header>
        <div class="habbits">
            <h1>habbit tracker</h1>
            <div class="year">
                <label for="year-input" class="year-label">Choose a year:</label>
                <input type="number" placeholder="2023" id="year-input" name="year" min="2023">
            </div>
            <div class="months">
                <button class="month-btn">jan</button>
                <button class="month-btn">feb</button>
                <button class="month-btn">mar</button>
                <button class="month-btn">apr</button>
                <button class="month-btn">may</button>
                <button class="month-btn">jun</button>
                <button class="month-btn">jul</button>
                <button class="month-btn">aug</button>
                <button class="month-btn">sep</button>
                <button class="month-btn">oct</button>
                <button class="month-btn">nov</button>
                <button class="month-btn">dec</button>
            </div>

            <table>
                <script>
                    var habits = ['Water', 'Workout', 'Walk', 'Yoga', 'Vitamins', 'Skin Care', 'Reading', 'Uni Work']; // Array of habit names
                    
                    document.write('<tr>');
                    document.write('<th></th>'); 
                    
                    for (var day = 1; day <= 31; day++) {
                        document.write('<th>' + day + '</th>');
                    }
                    
                    document.write('</tr>');
                    for (var i = 0; i < habits.length; i++) {
                        document.write('<tr>');
                        document.write('<th>' + habits[i] + '</th>');
                        
                        for (var j = 0; j < 31; j++) {
                            document.write('<td><label class="container2"><input type="checkbox"> <span class="checkmark"></span></label></td>');
                        }
                            
                        document.write('</tr>');
                    }
                </script>
            </table>
            <h2>goals</h2>
            <div class="goals">
                <form action="">
                    <label>Choose your habbit and enter days count to create a new goal:</label>
                    <select>
                        <option value="">--</option>
                        <option value="Water">Water</option>
                        <option value="Workout">Workout</option>
                        <option value="Walk">Walk</option>
                    </select>
                    <input type="number" id="dayInput" min="1" max="31">
                    <input id="create" type="submit" value="Create">
                </form>
            </div>
            <div class="box">
            <h3 style="padding-right:100px">Water progress:</h3>
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number"></div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                <stop offset="0%" stop-color="rgb(41, 61, 49)" />
                                <stop offset="100%" stop-color="rgb(99, 112, 104)" />
                                </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                    </svg>
                
                </div>
                <p style="padding-left:100px;">20 / 31</p>
            </div>
            <script> let number = document.getElementById("number"); let counter = 0; setInterval(()=>{if(counter==65){clearInterval();} else{counter+=1; number.innerHTML = counter + "%"}},30)</script>
        </div>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>