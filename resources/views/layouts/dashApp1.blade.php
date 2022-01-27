<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/material-dashboard.min.js') }}" defer></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

<!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />

</head>
<body class = "g-sidenav-show  bg-gray-200">
@include('layouts.sidenav1')
<div>
    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
    {{--        <div class="container">--}}
    {{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--                {{ config('app.name') }}--}}
    {{--            </a>--}}
    {{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <!-- Left Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav me-auto">--}}

    {{--                </ul>--}}

    {{--                <!-- Right Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav ms-auto">--}}
    {{--                    <!-- Authentication Links -->--}}
    {{--                    @guest--}}
    {{--                        @if (Route::has('login'))--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endif--}}

    {{--                    @else--}}
    {{--                        <li class="nav-item dropdown">--}}
    {{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--                                <i class = "fas fa-user-alt" style = "padding-right:5px"></i> {{ Auth::user()->title }}. {{ Auth::user()->first_name }}--}}
    {{--                            </a>--}}

    {{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                                <a class="dropdown-item" href="{{ route('logout') }}">--}}
    {{--                                    Profile--}}
    {{--                                </a>--}}

    {{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                                   onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                    {{ __('Logout') }}--}}
    {{--                                </a>--}}

    {{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
    {{--                                    @csrf--}}
    {{--                                </form>--}}
    {{--                            </div>--}}
    </li>
    {{--                    @endguest--}}
    </ul>
</div>
</div>
</nav>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.nav')
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @yield('content')
</main>
</div>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
</body>
</html>
