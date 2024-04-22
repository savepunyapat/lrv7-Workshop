@extends('layouts.master_template')
@section('title') Home @endsection
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="data:image/jpeg;base64,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" class="d-block w-100  img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://imageio.forbes.com/specials-images/imageserve/5ed00f17d4a99d0006d2e738/0x0.jpg?format=jpg&crop=4666,4663,x154,y651,safe&height=416&width=416&fit=bounds" class="d-block w-100  img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://media.gq.com/photos/5e94dfddd695ee0009153e93/4:3/w_2999,h_2249,c_limit/kanye-west-gq-cover-may-2020-promo.jpg" class="d-block w-100  img-fluid" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fa-solid fa-house"></i>
            <h1> Home </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi in ipsa vitae impedit a commodi iusto tenetur minima, aut quos!</p>
        </div>
        <div class="col-md-4">
            <i class="fa-solid fa-compass"></i>
            <h1> About us </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi in ipsa vitae impedit a commodi iusto tenetur minima, aut quos!</p>
        </div>
        <div class="col-md-4">
            <i class="fa-solid fa-tools"></i>
            <h1> Service </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi in ipsa vitae impedit a commodi iusto tenetur minima, aut quos!</p>
        </div>
    </div>
</div>
@endsection