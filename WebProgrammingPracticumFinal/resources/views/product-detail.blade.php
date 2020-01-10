@extends('homepage')

@section('title', 'Figure Details')
@section('content')

<div class="grid-menu" style="margin-left : 70%;">
    <h1 style="font-size: 50px; margin-bottom:10%; margin-left: 30%; color: brown">RAPTHALIA</h1>
    <img src="/storage/raphtalia.jpg" style="width : 350px; height:500px; border-style: groove;" alt="">
</div>

<div class="grid-content" style="text-align:left">
    <div class="product-desc">
        <h2>Figure Description</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iste sit inventore nostrum deleniti, illum aliquam animi maxime tenetur facere pariatur nulla quos, quidem, fuga fugit consequuntur repudiandae. Dolorum, molestias!</p>
    </div>
    <div class="product-desc">
        <h2>Figure Details</h2>
        <ul id="product-figure-details">
            <li>Category : Bishoujo (Girl's Figurine)</li>
            <li>Quantity : 10</li>
            <li>Price : 1500000</li>
        </ul>
    </div>
</div>

@endsection