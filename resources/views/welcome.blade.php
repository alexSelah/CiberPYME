<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CiberPYME</title>

        <!-- Fonts -->
        <link href="css/nunito.css" rel="stylesheet">

        <!-- FavIcon for CiberPYME -->
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('text.logged') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('text.login') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('text.register') }}</a>
                    @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="row">
                    <div class="title m-b-md">
                        <img src="{{ asset('images/LogoCiberPYME.png') }}" />
                    </div>

                    <div class="links">
                        <a href="{{ route('documentacion') }}">{{ __('text.docs') }}</a>
                        <a href="{{ route('tour') }}">{{ __('text.testing') }}</a>

                    </div>
                </div>
                <br/>

                {{-- CONTROL DE IDIOMA --}}
                <div class="row">
                    @if (Config::get('app.locale') == 'en')
                        <a href="{{url('/lang/es')}}">
                            <img src="{{ asset('images/spanishSwitch.png') }}" width="80px" />
                        </a>
                    @else
                        <a href="{{url('/lang/en')}}">
                            <img src="{{ asset('images/englishSwitch.png') }}" width="80px" />
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div>
            <div style="text-align: left !important;"><a href="{{url('about')}}" style="text-decoration:none !important; font: cursive;">&Pi;</a></div>
        </div>
    </body>
</html>
