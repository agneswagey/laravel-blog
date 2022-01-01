@extends('layouts.main')

@section('container')
    <!-- <h1>Halaman About</h1>

    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p> -->
    <div class="container">
        <div class="row">
            <div class="col-3"><img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"></div>
            <div class="col-9">
                <h3>Greetings!</h3>
                <p>Hello, my name is Agnes Emanuella Wagey, you can call me Agnes. I started my journey as a developer since I was graduated from Bina Nusantara University majoring in Computer Science. When I was learned PHP in my 3rd year, I feel like I have found something that I want to do for my career. So I decided to learn about web programming deeper. I learned HTML, CSS and Javascript, jQuery, Bootstrap, and also MySQL, PostgreSQL for database. In my current job I learn something new, it's system integration using REST API and a custom PHP framework.</p>
                <p>I realize that technology has evolved constantly. So that I start to learn Laravel and now I enjoy using this framework. This is my first project using Laravel. I know it's still far from the real project but I want to move forward and go deeper with it.</p>
                <p>Thank you for reading this scratch :)</p>
            </div>
        </div>
    </div>
@endsection
    