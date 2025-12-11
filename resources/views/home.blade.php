@extends('layouts.app') 

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-left">
                    <h2 class="hero-headline">This is a FREE website template</h2>
                    <p class="hero-text">This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn-readmore">Read more</a>
                </div>
                <div class="hero-right">
                    <img src="{{ asset('images/house.jpg') }}" alt="House graphic" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <img src="{{ asset('images/pastry1.jpg') }}" alt="Pastries" class="feature-image">
                    <p class="feature-text">This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
                    <div class="feature-tab">
                        <img src="{{ asset('images/button-more.jpg') }}" alt="More">
                    </div>
                    <a href="#" class="readmore-link">Click to read more</a>
                </div>

                <div class="feature-card">
                    <img src="{{ asset('images/fruits.jpg') }}" alt="Fruits" class="feature-image">
                    <p class="feature-text">This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
                    <div class="feature-tab">
                        <img src="{{ asset('images/button-more.jpg') }}" alt="More">
                    </div>
                    <a href="#" class="readmore-link">Click to read more</a>
                </div>

                <div class="feature-card">
                    <img src="{{ asset('images/cosmetics.jpg') }}" alt="Cosmetics" class="feature-image">
                    <p class="feature-text">This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
                    <div class="feature-tab">
                        <img src="{{ asset('images/button-more.jpg') }}" alt="More">
                    </div>
                    <a href="#" class="readmore-link">Click to read more</a>
                </div>
            </div>
        </div>
    </section>

@endsection