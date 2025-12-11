<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xayona - @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 

    </head>
</head>
<body>
    <div class="top-border"></div>
    <div class="wrapper">
        <header class="site-header">
            <div class="container">
                <div class="header-inner">
                    <div class="logo">
                        <img src="{{ asset('images/logo.gif') }}" alt="Xayona">
                    </div>
                    <nav class="main-nav">
                        <ul>
                            <li><a href="{{ route('home') }}" class="active">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            @yield('content') 
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-left">
                        <a href="{{ route('home') }}">Home</a> | 
                        <a href="{{ route('about') }}">About</a> | 
                        <a href="{{ route('blog') }}">Blog</a> | 
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </div>
                    <div class="footer-center">
                        Copyright © {{ date('Y') }}. Company name all rights reserved
                    </div>
                    <div class="footer-right">
                        <img src="{{ asset('images/icons.gif') }}" alt="Social icons" class="social-icons">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>