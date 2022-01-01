@extends('layouts.main')

@section('container')
    <!-- <h1>Welcome to My Blog</h1> -->
    
    <!-- <img src="img/{{ $image }}" class="img-thumbnail"> -->
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/blog1.jpg" class="d-block w-100">
        <div class="carousel-caption bg-dark opacity-75">
            <h3>Welcome to My Blog</h3>
            <p>Creative</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/blog2.jpg" class="d-block w-100">
        <div class="carousel-caption bg-dark opacity-75">
            <h3>Welcome to My Blog</h3>
            <p>Artistic</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/blog3.jpg" class="d-block w-100">
        <div class="carousel-caption bg-dark opacity-75">
            <h3>Welcome to My Blog</h3>
            <p>Innovative</p>
        </div>
    </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
    </div>
@endsection

