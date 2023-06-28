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
                @if($sessionUser)
                    <a href="{{action([App\Http\Controllers\LandingPageController::class, 'index'])}}">About</a>
                    <a href="{{action([App\Http\Controllers\MotivationController::class, 'index'])}}">Motivation</a>
                    <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['sessionUser'=> $sessionUser])}}">Habbits</a>
                    <a href="{{action([App\Http\Controllers\ProfileController::class, 'index'], ['sessionUser'=> $sessionUser])}}">Profile</a>

                    <form action="{{ action([App\Http\Controllers\LogoutController::class, 'store']) }}" 
                    method="POST" id="logout-form" style="display: none;">@csrf</form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                @else
                    <a href="{{action([App\Http\Controllers\LandingPageController::class, 'index'])}}">About</a>
                    <a href="{{action([App\Http\Controllers\MotivationController::class, 'index'])}}">Motivation</a>
                    <a href="{{action([App\Http\Controllers\RegisterController::class, 'index'])}}">Sign Up</a>
                    <a href="{{action([App\Http\Controllers\LoginController::class, 'index'])}}">Sign In</a>
                @endif
            </nav>
        </header>
        <div class="profile">
            <h1> Profile editing </h1>
            <div class="container-profile">
                <div class="left-column">
                    <div class="profile-picture-container">
                        <img src="{{$fullUser->Avatar}}" alt="Profile picture" height="270" class="profile-picture">
                    </div>
                    <form method="POST" action="{{ action([App\Http\Controllers\AvatarEditController::class, 'store']) }}">
                            @csrf
                            <label for="info_pic_input" class="info-pic-label">Enter URL:</label>
                            <input type="text"  id="info_pic_input" name="info_pic_input" value="{{$fullUser->Avatar}}">
                            
                            <button type="submit" class="btn-ppic">Change</button>
                    </form>
                </div>
                <div class="right-column">
                    <div class="profile-info">
                        <form method="POST" action="{{ action([App\Http\Controllers\ProfileEditController::class, 'store']) }}">
                            @csrf
                            <label for="info_name_input" class="info-name-label">Change your full name:</label>
                            <input type="text"  id="info_name_input" name="info_name_input" value="{{$fullUser->FullName}}">
                            <label for="info_username_input" class="info-username-label">Change your username:</label>
                            <input type="text"  id="info_username_input" name="info_username_input" value="{{$fullUser->Username}}">
                            <label for="info_email_input" class="info-email-label">Change your email:</label>
                            <input type="email"  id="info_email_input" name="info_email_input" value="{{$fullUser->Email}}">
                            <label>Choose language:</label>
                            <select>
                                @if($fullUser->Language=="ENG")
                                    <option value="ENG">ENG</option>
                                    <option value="LV">LV</option>
                                @else
                                    <option value="LV">LV</option>
                                    <option value="ENG">ENG</option>
                                @endif
                            </select>
                            <div class="update-btns">
                                <a href="{{action([App\Http\Controllers\ProfileController::class, 'index'], ['sessionUser'=> $sessionUser])}}">
                                    <button class="update-btn">cancel</button>
                                </a>
                                    <button class="update-btn" type="submit">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>