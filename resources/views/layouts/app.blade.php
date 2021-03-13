<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Wonderful Journey', 'Wonderful Journey') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container mt-3 pt-3 mb-3 pb-2">
            <div class="row justify-content-center">
                <h1>Wonderful Journey</h1>
            </div>
            <div class="row justify-content-center">
                <h5>The Blog of Indonesia Tourism</h5>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">
                                    <img src="/assets/WebProg2.png" alt="" width="30" height="24" class="d-inline-block align-top">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @php 
                                        $article = App\Category::all();
                                    @endphp
                                    @foreach($article as $a)
                                    <a class="dropdown-item" href="{{url('/category/'.$a->categoryId.'/')}}">
                                        {{$a->categoryName}}
                                    </a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/aboutUs/') }}">About Us</a>
                            </li>
                        @elseif(Auth::user()->role == 'member')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home/') }}">
                                    <img src="/assets/WebProg2.png" alt="" width="30" height="24" class="d-inline-block align-top">
                                </a>
                            </li>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/member-profilePage/') }}">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/member-blogMenu/') }}">Blog</a>
                                </li>
                            </ul>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home/') }}">
                                    <img src="/assets/WebProg2.png" alt="" width="30" height="24" class="d-inline-block align-top">
                                </a>
                            </li>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin-blogMenu/') }}">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin-userList/') }}">User</a>
                                </li>
                            </ul>
                        @endguest
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
