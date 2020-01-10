@extends('homepage')

@section('title', 'Login')
@section('content')

<div class="grid-content">
    <form action="login" method="post">
        @csrf
        <div class="input-form">
            <input type="email" name="email" placeholder="E-mail address">
        </div>
        <div class="input-form">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input-form">
            <input type="checkbox" name="rememberme" value="yes"> <br>
            <span style="color:blue">Remember Me</span>
        </div>
        <div class="input-form">
            <button type="submit">Sign In</button>
        </div>
    </form>
</div>

@endsection