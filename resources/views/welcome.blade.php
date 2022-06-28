@if(request()->session()->has('finished'))
@php
    header("Location: " . URL::to('finish'));
    exit();
@endphp
@endif

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /* Customize the label (the container) */
            .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default radio button */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;

            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
                margin: 4px;
            }

            /* On mouse-over, add a grey background color */
            .container:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .container input:checked ~ .checkmark {
                background-color: #2196F3;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .container .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
        </style>

    </head>

    <body class="antialiased" oncopy="return false" oncut="return false" onpaste="return false">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="background: #cbd5e0;">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1>Quiz System</h1>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    @if ($errors->any())
                        <div class="alert alert-danger" style="text-align: center;">
                            <br>
                                @foreach ($errors->all() as $error)
                                   <p> <b>{{ $error }}</b></p>
                                @endforeach

                            </div>
                    @endif
                        @if (Session::has('Success'))
                            <div class="alert alert-success" style="text-align: center;">
                                <br>
                                    <p> <b>{{ Session::get('Success') }}</b></p>

                            </div>
                        @endif
                        <center>
                    <div style="padding: 30px; width: 600px; word-wrap: normal;">
                        @if(request()->session()->has('time') && request()->session()->has('questions'))

                            @if(isset($_GET["page"]))
                                @if($_GET["page"] >= 1 && $_GET["page"] <= request()->session()->get('questions'))


                            @foreach($questions as $question)
                                <br>
                                <span class="badge badge-danger" style="color: white; font-size: 140%;">Question {{ isset($_GET["page"]) ? $_GET["page"] : "1" }}</span>
                                 <div class="badge badge-dark" id="countdown" style="color: white; font-size: 140%;">Starting the Counter</div><br><br>
                                <div style="background-color: rgba(156,255,136,0.69);display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 140%;
    color: black;
    font-weight: 700;
    line-height: 1.2;
    text-align: center;
    vertical-align: baseline;
    border-radius: 0.25rem;">{{$question->question}}</div><br><br>
                                <label class="container" style="border-width: 3px;border-style: solid;border-image: linear-gradient(to right, #ac4eff, #44d2f4) 1;">{{$question->A}}
                                    <input type="radio" name="question{{$question->id}}" id="question{{$question->id}}A"  value="A">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container" style="border-width: 3px;border-style: solid;border-image: linear-gradient(to right, #ac4eff, #44d2f4) 1;">{{$question->B}}
                                    <input type="radio" name="question{{$question->id}}" id="question{{$question->id}}B"  value="B">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container" style="border-width: 3px;border-style: solid;border-image: linear-gradient(to right, #ac4eff, #44d2f4) 1;">{{$question->C}}
                                    <input type="radio" name="question{{$question->id}}" id="question{{$question->id}}C"  value="C">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container" style="border-width: 3px;border-style: solid;border-image: linear-gradient(to right, #ac4eff, #44d2f4) 1;">{{$question->D}}
                                    <input type="radio" name="question{{$question->id}}" id="question{{$question->id}}D"  value="D">
                                    <span class="checkmark"></span>
                                </label>
                                <center>
                                    @if(!isset($_GET["page"]))
                                        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                                            <a id="btn" href="?page=2" rel="next" class="btn btn-primary btn-lg btn-block">
                                                Next Question &raquo;
                                            </a>
                                        </nav>
                                    @elseif($_GET["page"] == request()->session()->get('questions'))
                                        <a id="btn" href="{{route('finish')}}" rel="next" class="btn btn-success btn-lg btn-block">
                                            Submit All And Finish
                                        </a>
                                    @elseif($_GET["page"] >= 1 && $_GET["page"] < request()->session()->get('questions'))
                                    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                                        <a id="btn" href="?page={{ isset($_GET["page"]) ? $_GET["page"]+1 : "2" }}" rel="next" class="btn btn-primary btn-lg btn-block">
                                            Next Question &raquo;
                                        </a>
                                    </nav>
                                    @endif
                                </center>
                            @endforeach
                                @else
                                    Hata
                                @endif
                            @else
                                <span class="badge badge-dark" style="color: white; font-size: 140%;">
                                Welcome to the Quiz System.
                                </span><br><br>
                                <span class="badge badge-success" style="color: white; font-size: 140%;">
                                You will be given {{request()->session()->get('questions')}} questions in total.
                                </span><br><br>
                                <span class="badge badge-success" style="color: white; font-size: 140%;">
                                You will have {{request()->session()->get('time')}} seconds to answer each question.
                                </span><br><br>
                                <span class="badge badge-dark" style="color: white; font-size: 140%;">
                                Good luck.
                                </span><br><br><br>
                                <a href="?page=1" class="btn btn-primary btn-lg btn-block">Let's Start</a>
                            @endif
                            @else

                            <form name="check-first" id="check-first" method="post" action="{{url('check-first')}}">
                                <center>
                                    @csrf
                                    <label for="time"><b>Answer Time For Per Question (15-120 secs.)</b></label>
                                    <input type="text" class="form-control" name="time" value="{{ old('time') }}">
                                    <br>
                                    <label for="questions"><b>Total Questions (1-10)</b></label>
                                    <input type="text" class="form-control" name="questions" value="{{ old('questions') }}">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Start a Quiz</button>
                                </center>
                            </form>
                            @endif

                            </div>
                        </div>

                @if(request()->session()->has('time') && request()->session()->has('questions'))
                    <center><br>
                    <span class="badge badge-info" style="color: white; font-size: 130%;">{{request()->session()->get('time')}} seconds for per question</span>
                    <span class="badge badge-info" style="color: white; font-size: 130%;">Total Questions: {{request()->session()->get('questions')}}</span>
                    <br><br>
                <button type="button" class="btn btn-danger btn-lg btn-block" onclick="myFunc()">
                    Quit the Quiz
                </button>
                    </center>
                <script>
                    function myFunc() {

                        if (confirm("All the settings you set will be reset and you will be redirected to the homepage. Do you confirm?") == true) {
                            sessionStorage.clear();
                            window.location.href = "logout";
                        }

                    }
                </script>
                @endif
                    </div>
                </div>

            </div>
        </div>
        @if(isset($_GET["page"]) && $_GET["page"] >= 1 && $_GET["page"] <= request()->session()->get('questions'))
        <script>
            var sH = sessionStorage.getItem({{$question->id}});
            var timeleft = {{request()->session()->get('time')}};
            if(sessionStorage.getItem({{$question->id}} + "time") === null){
            sessionStorage.setItem({{$question->id}} + "time", timeleft);
            }

            if(sessionStorage.getItem({{$question->id}} + "out") != "out"){
                var downloadTimer = setInterval(function(){
                    if(sessionStorage.getItem({{$question->id}} + "time") <= 0){
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Finished";
                        sessionStorage.setItem({{$question->id}} + "out", "out");

                        document.getElementById("question" + {{$question->id}} + "A").disabled=true;
                        document.getElementById("question" + {{$question->id}} + "B").disabled=true;
                        document.getElementById("question" + {{$question->id}} + "C").disabled=true;
                        document.getElementById("question" + {{$question->id}} + "D").disabled=true;
                        sessionStorage.setItem({{$question->id}}, "empty");

                    } else {
                        document.getElementById("countdown").innerHTML = sessionStorage.getItem({{$question->id}} + "time") + " seconds remaining";
                    }
                    timeleft = sessionStorage.getItem({{$question->id}} + "time") - 1;
                    sessionStorage.removeItem({{$question->id}} + "time");
                    sessionStorage.setItem({{$question->id}} + "time", timeleft);
                    console.log(timeleft);
                }, 1000);
            }else{
                document.getElementById("countdown").innerHTML = " Your time is up!";
            }


            document.addEventListener("DOMContentLoaded", function(event) {
                if (sessionStorage.getItem({{$question->id}}) !== null) {
                    if(sH == "A" || sH == "B" || sH == "C" || sH == "D"){
                    document.getElementById("question" + {{$question->id}} + sessionStorage.getItem({{$question->id}})).checked = true;
                    }
                    document.getElementById("question" + {{$question->id}} + "A").disabled=true;
                    document.getElementById("question" + {{$question->id}} + "B").disabled=true;
                    document.getElementById("question" + {{$question->id}} + "C").disabled=true;
                    document.getElementById("question" + {{$question->id}} + "D").disabled=true;
                }
            });

                const btn = document.querySelector('#btn');
                const radioButtons = document.querySelectorAll('input[name="question{{$question->id}}"]');
                btn.addEventListener("click", () => {
                    let selectedSize;
                    for (const radioButton of radioButtons) {
                        if (radioButton.checked) {
                            selectedSize = radioButton.value;
                            break;
                        }
                    }


                    if(sessionStorage.getItem({{$question->id}}) === null){
                        sessionStorage.setItem({{$question->id}}, selectedSize);
                    }else if(sessionStorage.getItem({{$question->id}}) !== selectedSize)
                    {
                        var sH = sessionStorage.getItem({{$question->id}});
                        if(sH == "A" || sH == "B" || sH == "C" || sH == "D"){
                            alert("The answer you chose for this question was "+ sessionStorage.getItem({{$question->id}}) +". It cannot be changed after the time has expired or once answer is selected.")
                            }else{
                            alert("You did not answer this question. It cannot be changed after the time has expired.")
                        }
                    }
                });



            document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
        @endif
    </body>
</html>
