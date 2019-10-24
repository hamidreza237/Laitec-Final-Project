<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    @if(Auth::check())
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <!-- Links -->
            <ul class="navbar-nav col-10 ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('setting.create')}}">setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('slider.create')}}">slider</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/')}}" target="_blank">show website</a>
                </li>
                <li class="nav-item dropdown float-right">

                </li>
            </ul>
            <section class="col-2 float-right text-center">
                <a class="dropdown-item text-white bg-secondary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </section>
        </nav>
    @endif

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
