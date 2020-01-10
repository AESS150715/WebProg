@extends('homepage')

@section('title', 'Insert Feedback')
@section('content')

<div class="grid-content">
    <form class="login-form" action="login" method="post" style=" margin-top:5%; margin-bottom: 24.5%; width: 40%">
        <h4 style="width:100%; font-size: 30px; text-align: center; line-height: 100px">INSERT FEEDBACK</h4>
        @csrf
        <div class="input-form" style="margin-left: 12.5%">
            <textarea name="feedback" id="" cols="40" rows="10" placeholder="Feedback"></textarea>
        </div>
        <div class="input-form" style="margin-left: 2%">
            <button type="submit" style="width:77.5%; line-height: 35px; background-color: lightskyblue; color:white; text-align: center; margin-left: 10%; border-radius: 5px;">UPDATE</button>
        </div>
    </form>
</div>

@endsection

