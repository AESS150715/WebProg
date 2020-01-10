@extends('homepage')

@section('title', 'Profile')
@section('content')

<div class="grid-content">
    <div id="profile-title" style="margin-left: -25%">    
        <h2 style="font-size: 36px; text-align: left">Profile</h2>
        <br><hr style="border: 0.5px solid lightgray; width: 92.5%"><br>
    </div>    
    <form id="profile-form" action="profile" method="post" style="margin-left: 0%">
        <h2 class="profile-form" style="width:100%; font-size: 30px; line-height: 20px">Personal Info</h2>
        
        @csrf
        <div class="profile-form">
            <span>Fullname: </span><br>
            <input type="text" class="profile-form-text" name="name" disabled placeholder="Fullname">
        </div>
        <div class="profile-form">
            <span>E-mail :</span><br>
            <input type="email" class="profile-form-text" name="email" disabled placeholder="E-mail address">
        </div>
        <div class="profile-form">
            <span>Phone :</span><br>
            <input type="text" class="profile-form-text" name="phone" disabled placeholder="Phone Number">
        </div>
        <div class="profile-form">
            <span>Gender</span><br>
            <input type="text" class="profile-form-text" name="gender" disabled placeholder="Gender">
        </div>
        <div class="profile-form">
            <span>Address: </span><br>
            <input type="text" class="profile-form-text" name="address" disabled placeholder="Addresses">
        </div>
        
        <div class="profile-form">
            <button type="submit" style="font-size: 16px; width:10%; line-height: 24px; background-color: lightskyblue; color:white; border-radius: 5px">Edit Profile</button>
        </div>
    </form>
</div>

@endsection

