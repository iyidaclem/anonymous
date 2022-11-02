<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- propellAds --}}
    <meta name="propeller" content="9d3060fbaa6917f931e1b71cb1890ae2">
    

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords" content="lolnews">
    <meta name="description" content="lolnews">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('images/LOL.png') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ url('images/fevicon.png" type="image/gif ') }} "/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ url('/') . '/css/jquery.mCustomScrollbar.min.css' }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ url('/fonts.gstatic.com') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    

</head>

<body class="main-layout w-100" style="width: 100vw; overflow-x: hidden;">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading-animation.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
        <!-- header inner -->
            <div class="container-fluid header">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                        <div class="full">
                            <div class="">
                                <a href="{{ url('') }}">
                                    <h1 class="te"><img width="100" src="{{url('/').'/images/LOL.png'}}" alt="">NEWS</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top:-10%">
                    <nav class="navigation navbar navbar-expand-md navbar-dark mr-5">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav text-center mr-auto">
                                @guest
                                    <li class="nav-item" href="{{ url('login') }}">
                                        <button class="btn btn-warning text-primary"><a class="nav-link  login-btn"
                                                href="{{ url('/login') }}">Log in</a> </button>
                                    </li>
                                    <li class="nav-item" href="{{ url('login') }}">
                                        <button class="btn btn-warning text-primary"><a class="nav-link  login-btn"
                                                href="{{ url('/register') }}">Register</a> </button>
                                    </li>
                                @else
                                
                                <li class="nav-item" >
                                        <button class="btn btn-danger text-primary"><a class="nav-link  login-btn"
                                              href="{{ url('home') }}"  >Dashboard</a> </button>
                                                
                                </li>
                                    <li class="nav-item" href="{{ url('login') }}">
                                        <form action=" {{ route('logout') }} " method="post">
                                            <button class="btn btn-danger text-primary"><a class="nav-link  login-btn"
                                                    >Logout</a> </button>
                                                    @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                       
                         <li class="nav-item">
                            <a href="{{url('/docs')}}" class="nav-link">Docs</a>
                         </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </nav> --}}

    <main class="main" style="padding-top: 10%">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/{{ url('/') }}js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <footer style="margin-top: 300px;">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="cont">
                            <h3>Enjoy your free <br>
                                time here and stay positive
                            </h3>
                            <p></p>
                            <a class="read_more" href="#">Get-intouched</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022 All Rights Reserved. Design by <a
                                    href="https://web.facebook.com/PABLO-II-Webcode-102409538287865"> pablo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ url('/') . '/js/jquery.min.js' }}"></script>
    <script src="{{ url('/') . '/js/popper.min.js' }}"></script>
    <script src="{{ url('/') . '/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ url('/') . '/js/jquery-3.0.0.min.js' }}"></script>
    <script src="{{ url('/') . '/js/plugin.js' }}"></script>
    <!-- sidebar -->
    <script src="{{ url('/') . '/js/jquery.mCustomScrollbar.concat.min.js' }}"></script>
    <script src="{{ url('/') . '/js/custom.js' }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>
