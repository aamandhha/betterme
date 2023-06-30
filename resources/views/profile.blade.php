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
                    <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 1, 'sessionUser'=> $sessionUser])}}">Habbits</a>
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
            <h1> Profile </h1>
            <div class="container-profile">
                <div class="left-column">
                    <div class="profile-picture-container">
                        <img src="{{$fullUser->Avatar}}" alt="Profile picture" height="270" class="profile-picture">
                     </div>
                     <a href="{{action([App\Http\Controllers\AvatarEditController::class, 'index'], ['sessionUser'=> $sessionUser])}}">
                     <button class="btn-ppic">Change photo</button>
                    </a>
                </div>
                <div class="right-column">
                    <div class="profile-info">
                        <form>
                            <label for="info_name_input" class="info-name-label">Your full name:</label>
                            <input type="text" disabled="disabled" id="info_name_input" name="info_name_input" value="{{$fullUser->FullName}}">
                            <label for="info_username_input" class="info-username-label">Your username:</label>
                            <input type="text" disabled="disabled" id="info_username_input" name="info_username_input" value="{{$fullUser->Username}}">
                            <label for="info_email_input" class="info-email-label">Your email:</label>
                            <input type="email" disabled="disabled" id="info_email_input" name="info_email_input" value="{{$fullUser->Email}}">
                            <label for="info-lang-input" class="info-lang-label">Your language:</label>
                            <input type="text" disabled="disabled" id="info-lang-input" name="name" value="{{$fullUser->Language}}">
                        </form>
                        <div class="update-btns">
                            <a href="{{action([App\Http\Controllers\ProfileEditController::class, 'index'], ['sessionUser'=> $sessionUser])}}">
                                <button class="update-btn">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>