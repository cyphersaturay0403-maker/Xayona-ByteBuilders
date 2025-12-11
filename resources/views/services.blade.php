<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xayona | Services</title>

    <link rel="stylesheet" href="{{ asset('styles3.css') }}">
</head>
<body>

<div class="container">

    <header>
        <h1 class="logo">Xayona</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
            </ul>
        </nav>
    </header>

    <main>

        @php
            $services = [

                [
                    "title" => "Services Offered 1",
                    "main" => "service1_main.jpg",
                    "thumbs" => ["service1_a.jpg", "service1_b.jpg", "service1_c.jpg"]
                ],
                [
                    "title" => "Services Offered 2",
                    "main" => "service1_main.jpg",
                    "thumbs" => ["service1_a.jpg", "service1_b.jpg", "service1_c.jpg"]
                ],
                [
                    "title" => "Services Offered 3",
                    "main" => "service1_main.jpg",
                    "thumbs" => ["service1_a.jpg", "service1_b.jpg", "service1_c.jpg"]
                ],


                [
                    "title" => "Services Offered 4",
                    "main" => "service4_main.jpg",
                    "thumbs" => ["service4_a.jpg", "service4_b.jpg", "service4_c.jpg"]
                ],
                [
                    "title" => "Services Offered 5",
                    "main" => "service5_main.jpg",
                    "thumbs" => ["service5_a.jpg", "service5_b.jpg", "service5_c.jpg"]
                ],
                [
                    "title" => "Services Offered 6",
                    "main" => "service6_main.jpg",
                    "thumbs" => ["service6_a.jpg", "service6_b.jpg", "service6_c.jpg"]
                ]
            ];
        @endphp


        @foreach ($services as $service)
        <section class="service-box">
            <div class="service-image">


                <img src="{{ asset('image4/' . $service['main']) }}"
                     alt="Main image"
                     class="clickable-img">


                <div class="thumbnails">
                    @foreach ($service['thumbs'] as $thumb)
                        <img src="{{ asset('image4/' . $thumb) }}"
                             alt="Thumbnail"
                             class="clickable-img">
                    @endforeach
                </div>

                <p class="caption">click to enlarge images</p>
            </div>

            <div class="service-content">
                <h2>{{ $service['title'] }}</h2>
                <p>
                    This website template has been designed by Free Website Templates for you, for free.
                    You can replace all this text with your own text.
                </p>
                <div class="plus-button">+</div>
            </div>
        </section>
        @endforeach


        <div class="pagination">
            <span class="active-page">1</span>
        </div>

    </main>

</div>


<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
</div>


<script>
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

document.querySelectorAll('.clickable-img').forEach(img => {
    img.addEventListener('click', (e) => {
        e.stopPropagation();
        lightbox.style.display = 'flex';
        lightboxImg.src = img.src;
    });
});

function closeLightbox() {
    lightbox.style.display = 'none';
}
</script>

</body>
</html>
