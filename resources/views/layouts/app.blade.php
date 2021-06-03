<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto px-3">
                
                <nav class="flex items-center justify-between flex-wrap">
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'laravel') }}
                        </a>
                    </div>
                    <div class="block sm:hidden">
                        <button class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div id="main-nav" class="w-full sm:flex items-center sm:w-auto hidden">
                        <div class="text-gray-100 ml-auto text-md sm:flex-grow">
                            <a class="no-underline hover:underline block mt-4 sm:inline-block sm:mt-0 mr-4" href="/">Home</a>
                            <a class="no-underline hover:underline block mt-4 sm:inline-block sm:mt-0 mr-4" href="/blog">Blog</a>
                            
                            @guest
                                <a class="no-underline hover:underline block mt-4 sm:inline-block sm:mt-0 mr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="no-underline hover:underline block mt-4 sm:inline-block sm:mt-0 mr-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <span>{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                class="no-underline hover:underline"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
