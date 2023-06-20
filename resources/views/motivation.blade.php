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
                <a href="#motivation">Motivation</a>
                <a href="#sign_up">Sign Up</a>
                <a href="#sign_in">Sign In</a>
            </nav>
        </header>
        <div class="motivation">
            <h2>Why should you start tracking habbits?</h2>
            <p>
                It's time to embark on a transformative journey of personal growth and success. 
                Imagine a life where your habits work in harmony with your goals, propelling you towards greatness. 
                By embracing habit tracking, you hold the key to unlocking a world of endless possibilities.
            </p>
            <p>
                Embrace the empowering feeling of taking control of your life. No longer will you be held captive 
                by the limitations of the past. By tracking your habits, you gain the ability to measure progress, 
                identify patterns, and make informed decisions that propel you towards your dreams.
            </p>
            <p>
                Remember, greatness is not achieved in grand gestures alone, but in the small, consistent actions 
                we take each day. It's the commitment to showing up for yourself and staying accountable that sets 
                you apart. Habit tracking provides the structure and guidance you need to stay on track, even on the toughest days.
            </p>
            <p>
                Today, you stand at the precipice of transformation. Seize this moment and make the decision to prioritize your 
                personal growth. Embrace habit tracking as your compass, guiding you towards a life of fulfillment, success, and limitless possibilities.
            </p>
            <p>
                The journey starts now. Harness your inner strength, ignite your motivation, and embark on the path to greatness. Together, let's make every 
                habit count and unlock the extraordinary life that awaits you. Start habit tracking today and unleash your full potential.
            </p>
            <hr>
            <h2>Helpful tips for tracking habits effectively</h2>
            <div class="list">
                <ol>
                    <li><b>Start Small:</b> Begin by focusing on one or two key habits at a time. By starting small, you increase your chances of success and prevent overwhelm. As you build consistency, gradually introduce new habits into your tracking routine.</li>
                    <li><b>Set Clear Goals:</b> Define specific and measurable goals for each habit you track. Be clear about what you want to achieve and set realistic targets. For example, instead of saying "exercise more," specify a goal like "exercise for 30 minutes, three times a week."</li>
                    <li><b>Choose a Tracking Method:</b> Decide on a tracking method that works best for you. You can use a habit tracking app, a journal, a spreadsheet, or even a simple checklist. Find a system that is easy to use and suits your preferences.</li>
                    <li><b>Be Consistent:</b> Consistency is key when tracking habits. Make it a daily practice to record your progress. Set aside a dedicated time each day to review and update your habit tracker. Consistency helps you build momentum and stay accountable.</li>
                    <li><b>Track the Process and Progress:</b> Besides marking whether you completed a habit or not, consider tracking additional data related to your habits. For example, note the time of day, your energy levels, or any relevant observations. This information can provide valuable insights and help you optimize your habits.</li>
                    <li><b>Be Kind to Yourself:</b> Remember, building new habits takes time and effort. If you have an off day or miss a habit, don't be too hard on yourself. Instead, focus on getting back on track and staying committed. Treat yourself with kindness and patience throughout the process.</li>
                </ol>
            </div>

        </div>

        <footer> <p class="footer">Amanda Pāne 2023</p></footer>
    </body>
</html>