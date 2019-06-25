<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FavIcon for CiberPYME -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CiberPYME') }}</title>
    {{-- ABOUT --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particulas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/typed.js') }}"></script>

<body>

    <div id="particles-js"></div>
    <main class="py-4">
        <div class="texto"> 
        <h1 class="font-italic text-success"><span class="texto" id="typed"></span></h1>
        <br/><br/>
        <div id="oculto" class="img-fluid rounded mx-auto d-block" style="visibility:hidden">
            <img id="load_slow" src="images/acamfue.jpg" alt="Alejandro Campos" style="display:none;" height="50%">
            <br/><br/>
            <a id="load_slow2" class="text-center" href="{{ url('/') }}"><button class="btn btn-outline-success">{{ __('text.back') }}</button></a>
        </div>

        </div>
    </main>



    <script type="text/javascript">
        $(function(){
            $("#typed").typed({
                strings: ["... Loading Content. Please, Wait...", 
                        "Hacker's Name: Alejandro Campos...  Subject found.", 
                        "Last known place: Universidad Isabel I ... Found", 
                        "Reason: Trabajo de Fin de Grado...",
                        "Tutor's name: Agustín Fraile.. Searching...", 
                        "All subjects found... Adopting countermeasures...", 
                        "Contact FBI at: alejandro.campos\@alumnos.ui1.es"
                        ],
                typeSpeed: 40,
                backDelay: 600,
                loop: false,
                // defaults to false for infinite loop
                loopCount: false,
                callback: function(){ foo();  
            }
        });
        function foo(){ 
            document.getElementById("oculto").style.visibility="";
            $("#load_slow").fadeIn(6000);
            $("#load_slow2").fadeIn(6000);
            console.log("Callback");
        }
    });
    </script>


</body>
</head>
</html>