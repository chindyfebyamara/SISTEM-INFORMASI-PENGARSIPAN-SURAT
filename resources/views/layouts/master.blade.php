<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SISTEM INFORMASI PENGARSIPAN SURAT') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Sidebar style */
        .sidebar {
            width: 280px;
            height: 100%;
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar a svg {
            margin-right: 10px;
        }

        .sidebar a.active {
            font-weight: bold;
            color: #ffc107;
        }

        /* Main content style */
        .main-content {
            margin-left: 280px;
            /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SISTEM INFORMASI PENGARSIPAN SURAT') }}
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
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

        <div class="sidebar">
            <h2>SIPS</h2>
            <ul>
                <li><a href="{{ route('home') }}">Dashboard</a></li>
            </ul>
            <ul>
                <li>
                    <a href="{{ route('surat.index') }}" class="{{ Request::is('surat*') ? 'active' : '' }}">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="/path/to/svg-sprite.svg#nama-ikon" />
                        </svg>
                        Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori_surat.index') }}" class="{{ Request::is('kategori-surat*') ? 'active' : '' }}">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Kategori Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('jenis_surat.index') }}" class="{{ Request::is('jenis-surat*') ? 'active' : '' }}">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Jenis Surat
                    </a>
                </li>
            </ul>

        </div>

        <div class="main-content">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>