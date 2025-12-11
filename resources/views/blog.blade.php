<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xayona Blog</title>

    {{-- Updated CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
</head>
<body>

<header>
    <div class="container">
        <h1 class="logo">Xayona</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container">

    @foreach ($blogs as $blog)
        <div class="blog-entry">
            <div class="image-box">
                {{-- Main Image --}}
                <img src="{{ asset('images2/' . $blog['main']) }}" 
                     alt="{{ $blog['title'] }}" 
                     class="main-image">

                {{-- Thumbnails --}}
                <div class="thumb-row">
                    @foreach ($blog['thumbs'] as $thumb)
                        <img src="{{ asset('images2/' . $thumb) }}" 
                             alt="thumbnail" 
                             class="thumb">
                    @endforeach
                </div>

                <p>click to enlarge image</p>
            </div>

            <div class="blog-content">
                <h2>{{ $blog['title'] }}</h2>
                <p>
                    This website template has been designed by Free Website Templates for you, for free. 
                    You can replace all this text with your own text. This website template has been designed 
                    by Free Website Templates for you, for free. You can replace all this text with your own text.
                </p>
                <div class="read-more">
                    <a href="#"><span>+</span></a>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Pagination --}}
    <div class="pagination">
        <a href="#">&lt;&lt; First</a>

        @for ($i = 1; $i <= 21; $i++)
            <a href="#" class="{{ $i == 2 ? 'active' : '' }}">{{ $i }}</a>
        @endfor

        <a href="#">Last &gt;&gt;</a>
    </div>

</main>

<footer>
    <p>&copy; 2025 Xayona. All rights reserved.</p>
</footer>

</body>
</html>
