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

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet" type="text/css"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">


    <!-- DataTable -->
    <!-- Detectamos navegador -->
    @if(Browser::isFirefox())
            <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"/>
    @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/fixeddataTables.bootstrap4.min.css') }}"/>
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.dataTables.min.css') }}"/>
    
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/buttons.html5.min.js') }}"></script>

    {{-- SELEC2 --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>

    {{-- HTML to PDF --}}
    <script type="text/javascript" src="{{ asset('js/print.min.js') }}"></script>

    {{-- ABOUT --}}
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particulas.js') }}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <img src="{{ asset('images/favicon/favicon-32x32.png') }}" />
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'CiberPYME') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('text.dashboard') }} </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">

            @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
                @if(Session::has('alert-'.$msg)) 
                    <div class="alert alert-{{$msg}} container" role="alert">
                        {{ Session::get('alert-' . $msg) }}
                    </div> 
                @endif 
            @endforeach     


            @yield('content')
        </main>
    </div>
</body>
</html>
