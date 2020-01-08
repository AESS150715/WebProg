@extends('homepage')

@section('title', 'Mimi Figure Shop')
@section('content')

<div class="grid-menu" id="grid-menu-style">
	<div id="Welcome">
		<span>Welcome</span>
		{{-- <span>{{$user}},</span> --}}
	</div>
	<div id="Mimi_Figure_Shop">
			<span>Mimi Figure Shop</span>
		</div>
	<div id="currtime">
		<span id="txt"> Current Time : </span>
	</div>
	<form class="search-box">
		<input class="box-search" type="search" placeholder="Search" aria-label="Search">
		<button class="btn-search" type="submit"><img src="/storage/search.png" width="20px" height="18px" alt=""></button>
	  </form>
</div>

<div class="grid-content">
	<div class="product" style="text-align : center; border-style: groove; width : 25%;">
		{{-- @foreach ($products as $p) --}}
		
			<div class="card" style="width:100%">
				<img class="card-img-top" src="/storage/1.jpg" alt="Card image" style="width:100%">
			  	<div class="card-body" id="card-body-1">
					<h4 class="card-title" >
						<a href="#" class="btn btn-primary" style="text-decoration:none; color:blue">
						Rapthalia
						</a>
					</h4>
					<p class="card-text">Rp. 1.500.000,00 <br>
					<span style="text-overflow : ellipsis; overflow : hidden;">Lorem ipsum dolor sit amet consectetur ... </span> <br></p>
				</div>
				<div class="card-body" id="card-body-2">
						<span> Category : </span>
						<br>
						<button style="background-color:green; color:white;">Add To Cart</button>
				</div>
			</div>
		{{-- @endforeach --}}
		</div>
</div>  

@endsection