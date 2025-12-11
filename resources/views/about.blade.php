@extends('layouts.app') 

@section('title', 'About')

@section('content')

    <main class="content container">
        <style>
            .plus{
                width: 50px;
                height: 50px;
                }
        </style>
        <section class="about-text">
            <h3>We Have Free Templates for Everyone</h3>
            <p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="#">Terms of Use</a>. You can even remove all our links if you want to.</p>

            <h3>We Have More Templates for You</h3>
            <p>Looking for more templates? Just browse through all our <a href="#">Free Website Templates</a> and find what you’re looking for. But if you don’t find any website template you can use, you can try our <a href="#">Free Web Design</a> service and tell us all about it. Maybe you’re looking for something different, something special. And we love the challenge of doing something different and something special.</p>

            <h3>Be Part of Our Community</h3>
            <p>If you’re experiencing issues and concerns about this website template, join the discussion <a href="#">on our forum</a> and meet other people in the community who share the same interests with you.</p>

            <h3>Template details</h3>
            <p>Version 2<br>
                Website Template details, discussion and updates for this <a href="#">Generic Website Template</a>.<br>
                Website Template design by <a href="#">Free Website Templates</a>.
            </p>

            <p>Please feel free to remove some or all the text and links of this page and replace it with your own.</p>
        </section>

        <section class="cards">
            <div class="card">
                <img src="{{ asset('images1/pastries.jpg') }}" alt="Food Image">
                <p>
                    This website template has been designed by 
                    <a href="#">Free Website Templates</a> for you, for free. 
                    You can replace all this text with your own text.
                </p>
                <div class="readmore">
                    <img src="{{ asset('images1/icon1.jpg') }}" alt="Food Image" style="width: 50px; height: 50px;">
                    <a href="">Click here to read more</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images1/fruits.jpg') }}" alt="Fruit Bowl">
                <p>
                    This website template has been designed by 
                    <a href="#">Free Website Templates</a> for you, for free. 
                    You can replace all this text with your own text.
                </p>
                <div class="readmore">
                    <img src="{{ asset('images1/icon1.jpg') }}" alt="Food Image"  style="width: 50px; height: 50px;">
                    <a href="">Click here to read more</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images1/cosmetics.jpg') }}" alt="Spa Set">
                <p>
                    This website template has been designed by 
                    <a href="#">Free Website Templates</a> for you, for free. 
                    You can replace all this text with your own text.
                </p>
                <div class="readmore">
                   <img class="plus" src="{{ asset('images1/icon1.jpg') }}" alt="Food Image"  style="width: 50px; height: 50px;">
                   <a href="">Click here to read more</a>
                </div>
            </div>
        </section>
    </main>
    
    @endsection