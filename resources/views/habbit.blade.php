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

        <div class="habbits">
            <h1>habbit tracker</h1>
            
            <div class="months">
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 1, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">jan</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 2, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">feb</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 3, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">mar</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 4, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">apr</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 5, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">may</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 6, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">jun</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 7, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">jul</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 8, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">aug</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 9, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">sep</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 10, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">oct</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 11, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">nov</button></a>
                <a href="{{action([App\Http\Controllers\HabbitsController::class, 'index'], ['month' => 12, 'sessionUser'=> $sessionUser])}}"><button class="month-btn">dec</button></a>
            </div>
            <div class="chosen_month">
                <h4>
                    @if($month == 1) January @endif
                    @if($month == 2) February @endif
                    @if($month == 3) March @endif
                    @if($month == 4) April @endif
                    @if($month == 5) May @endif
                    @if($month == 6) June @endif
                    @if($month == 7) July @endif
                    @if($month == 8) August @endif
                    @if($month == 9) September @endif
                    @if($month == 10) October @endif
                    @if($month == 11) November @endif
                    @if($month == 12) December @endif
                </h4>
            </div>
            
            <form method="POST" action="{{ route('habbits.save', ['sessionUser' => $sessionUser]) }}">
                @csrf
                <table>
                    <tr>
                        <th></th>
                        @for($i = 1; $i <= 31; $i++)
                            <th>{{$i}}</th>
                        @endfor
                    </tr>
                    @php $p = 0; @endphp
                    @foreach ($allHabbits as $habbit)
                        <tr>
                            <th>{{$habbit->HabbitName}}</th>

                            @for($j = 1; $j <= 31; $j++)
                                <td>
                                    <label class="container2">
                                        @if($progress[$p] == 1) 
                                            <input type="checkbox" name="habbit_check[{{$habbit->Habbit_ID}}][{{$j}}]" checked>
                                        @else
                                            <input type="checkbox" name="habbit_check[{{$habbit->Habbit_ID}}][{{$j}}]">
                                        @endif
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                @php $p++; @endphp
                            @endfor
                        </tr>
                    @endforeach
                </table>
                <input type="hidden" id="habbit_month" name="habbit_month" value="{{ $month }}">
                <input class="save-btn" type="submit" value="Save">
            </form>

            <div class="create-delete-habbit">
                <form method="POST" action="{{ action([App\Http\Controllers\HabbitsController::class, 'store']) }}">
                    @csrf
                    <label for="habbit_input" class="habbit-label">New habbit:</label>
                    <input type="text"  id="habbit_input" name="habbit_input" required>
                    <input type="hidden" id="habbit_month" name="habbit_month" value="{{ $month }}">
                    <input id="create" type="submit" value="Create">
                </form>
                @if($allHabbits->count() > 0)
                    <form method="POST" action="{{ route('habbits.destroy', ['sessionUser' => $sessionUser, 'habbit' => $habbit->Habbit_ID]) }}">
                        @csrf
                        @method('DELETE')
                        <label for="habbit_del" class="habbit-label">Choose a habbit to delete:</label>
                        <select name="delHabbit">
                            @foreach ($allHabbits as $habbit)
                                <option value="{{$habbit->Habbit_ID}}">{{$habbit->HabbitName}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="habbit_month" name="habbit_month" value="{{ $month }}">
                        <input id="delete" type="submit" value="Delete">
                    </form>
                @endif
            </div>

            @if($allHabbits->count() > 0)
                <h2 id="goals">goals</h2>
                <div class="goals">
                    <form method="POST" action="{{ route('habbits.goal', ['sessionUser' => $sessionUser]) }}">
                        @csrf
                        <label>Choose your habbit and enter days count to create a new goal:</label>
                        <select name="newGoal">
                            @foreach ($allHabbits as $habbit)
                                <option value="{{$habbit->HabbitName}}">{{$habbit->HabbitName}}</option>
                            @endforeach
                        </select>
                        <input type="number" id="dayInput" name="days_end" min="1" max="31" required>
                        <input type="hidden" id="habbit_month" name="habbit_month" value="{{ $month }}">
                        <input id="create" type="submit" value="Create">
                    </form>
                </div>
            @endif
            
                @if(count($goalNames) > 0)
                    @php $g = 0; @endphp
                    @foreach($goalNames as $name)
                    <div class="box">
                        <h3 style="padding-right:30px">{{$name}} progress:</h3>
                        <p>{{$goals[$g]->DaysNow}} / {{$goals[$g]->DaysEnd}}</p>
                        @php $g++; @endphp
                    </div>
                    @endforeach
                @endif
            
        </div>
    </body>
</html>