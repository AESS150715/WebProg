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
	<div id="Current_time">
		<span><div id="txt"></div>
			</span>
	</div>
	<div id="search">
		<form action="home" method="post">
			@csrf
			<input type="text" style="width: 150px" name="search">
			<button name="searchBtn" value="" style="width:30px;"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>

<div class="grid-content">
	Content
</div>  

@endsection