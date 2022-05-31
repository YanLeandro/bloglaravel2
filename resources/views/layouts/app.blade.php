<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ayams Blog</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
<header class="w-full">
    <nav class="w-full bg-green-400 p-1 text-white flex justify-center py-4">
        <div class="w-full flex justify-between px-4">
            @guest
                <ul class="flex justify-between" style="width:130px">
                    <li>
                        <a class="hover:text-green-800" href="{{ route('home') }}">
                            HOME
                        </a>

                    </li>
                    <li>
                        <a class="hover:text-blue-600" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-blue-600" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i>
                        </a>
                    </li>
                </ul>
            @else
                <ul class="flex justify-between" style="width:140px">
                    <li>
                        <a class="hover:text-green-600" href="{{ route('home') }}">
                            HOME
                        </a>
                    </li>
                    <li>{{ Auth::user()->name }}</li>
                    @if( Auth::user()->isAdmin() or Auth::user()->isStaff() )
                        <li>
                            <a class="hover:text-green-800" href="{{ route('posts.store') }}" title="Admin">
                                <i class="fas fa-user-shield "></i>
                            </a>
                        </li>
                    @endif

                    <li>
                        <a class="hover:text-green-800" href="{{ route('logout') }}" title="logout" class="no-underline hover:underline" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            @endguest
            <ul class="flex justify-between" style="width:99px">
                <li>
                    <a class="hover:text-green-800" href="http://">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="hover:text-green-800" href="http://">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="hover:text-green-800" href="http://">
                        <i class="fas fa-rss"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="text-center py-8 text-4xl font-bold">
        <h1>Ayams Blog</h1>
    </div>
</header>
@yield('content')
<footer class="mt-12">
    <div class="max-w-full bg-red-300 p-4"></div>
    <div class="max-w-full text-center bg-gray-700 text-white p-4">
        <div class="font-bold ">@MyLaravel By <a class="hover:underline" href="https://github.com/YanLeandro/" target="_blank">Yanleandro</a></div>
    </div>
</footer>
</body>
</html>
