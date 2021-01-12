<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'ARS' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            font-family: "Arial", Serif;
            background-color: #f4f4f4;
        }
        
        .navbar ul{
            margin: 8px 0 0 0;
            list-style: none;
        }

        .navbar a:hover{
            background-color: #ddd;
            color: #000;
        }

        .side-nav{
            height: 100%;
            width: 0;
            position:fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            padding-top: 100px;
            transition: 0.5s;
        }

        .side-nav a{
            padding: 10ppx 10px 10px 30px;
            text-decoration: none;
            font-size: 22px;
            color: #000;
            display: block;
            transition: 0.3s;
            padding-left: 30px;
        }

        .side-nav a:hover{
            color: #fff;
        }

        .side-nav .btn-close{
            position: absolute;
            top: 0;
            right: 22px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main{
            transition:margin-left 0.5s;
            padding: 20px;
            overflow:hidden;
            width: 100%;
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

            .notice {
                align-items: center;
                position: absolute;
                top: 30px;
            }

            .content {
                padding: 0 25px;
                text-align: center;
                position: relative;
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

            .loginbody 
            {
                background-image: url('/img/uniten.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                height: 100vh;
                width: 150%;
                color: white;
            }
            .html
            {
                width: 780px;
                background-image: url('/img/uniten.jpg') no-repeat center top;
                margin: 0 auto;
                height:100%;
            }

            .img-round
            {
                border-radius:30px;
                border-color: #000;
                border-width: 100px;
            }

            .round
            {
                border-radius:20px;
            }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <span class="open-slide">
                <a href="#" onclick="openSlideMenu()">
                    <svg width="30" height="30">
                        <path d="M0,5 30, 5" stroke="#000" stroke-width="3"/>
                        <path d="M0,14 30, 14" stroke="#000" stroke-width="3"/>
                        <path d="M0,23 30, 23" stroke="#000" stroke-width="3"/>
                    </svg>
                </a>
            </span>
        
            <div class="container">
                <img src="{{ asset('/img/uniten.png') }}" width="60" height="40" title="Logo of a company" alt="Logo of a company" />
                <a class="navbar-brand" href="{{ url('staffreport/index') }}">
                    {{ "UNITEN's Accommodation Report System" }}
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
            <a href={{"index"}}>New Report</a>
            <a href={{"update"}}>Update Report</a>
            <a href={{"history"}}>Report History</a>
            <a href={{"notice"}}>Notices</a>
        </div>

        <script>
            function  openSlideMenu(){
                document.getElementById('side-menu').style.width = '250px';
                document.getElementById('main').style.marginLeft = '250px';
            }

            function  closeSlideMenu(){
                document.getElementById('side-menu').style.width = '0px';
                document.getElementById('main').style.marginLeft = '0px';
            }
        </script>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>