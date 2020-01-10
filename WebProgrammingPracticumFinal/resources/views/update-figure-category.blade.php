@extends('homepage')

@section('title', 'Update Figure Category')
@section('content')

<div class="grid-content">
    <form class="login-form" action="updating-figure-category" method="post" style=" margin-top:5%; margin-bottom: 24.5%; width: 40%">
        <h4 style="width:100%; font-size: 30px; text-align: center; line-height: 100px">UPDATE FIGURE CATEGORY</h4>
        @csrf
        <div class="input-form">
            <input type="text" name="categoryName" style="width:77.5%; line-height: 35px; margin-left: 10%; padding-left: 2.5%;" placeholder="Character">
        </div>
        <div class="input-form">
            <button type="submit" style="width:81%; line-height: 35px; background-color: lightskyblue; color:white; text-align: center; margin-left: 10%; border-radius: 5px;">UPDATE</button>
        </div>
    </form>
</div>

@endsection

