@extends('homepage')

@section('title', 'Login')
@section('content')

<div class="grid-content">
    <form class="login-form" action="login" method="post">
        <h4 style="width:100%; font-size: 50px; text-align: center; background-color: lightskyblue; line-height: 100px">SIGN IN</h4>
        @csrf
        <div class="input-form">
            <input type="email" class="input-form-text" name="email" style="width:80%; margin-top: 50px; line-height: 35px;" placeholder="E-mail address">
        </div>
        <div class="input-form">
            <input type="password" class="input-form-text" style="width:80%; line-height: 35px;" name="password" placeholder="Password">
        </div>
        <div class="input-form">
            <input type="checkbox" class="input-form-text" name="rememberme" value="yes">
            <span style="color:blue">Remember Me</span>
        </div>
        <div class="input-form">
            <button type="submit" class="input-form-text" style="width:80%; line-height: 35px; background-color: lightskyblue; color:white;">Sign In</button>
        </div>
    </form>
</div>
@endsection

