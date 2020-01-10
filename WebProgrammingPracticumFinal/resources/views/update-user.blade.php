@extends('homepage')

@section('title', 'User\'s Update')
@section('content')

<div class="grid-content">
    <form class="register-form" action="updating-user" method="post">
        <h2 style="width:100%; font-size: 30px; text-align: center; line-height: 50px">Update User</h2>
        @csrf
        <div class="regis-input-form">
            <input type="text" class="regis-input-form-text" name="name" style="width:80%; margin-top: 20px; line-height: 20px;" placeholder="Fullname">
        </div>
        <div class="regis-input-form">
            <input type="email" class="regis-input-form-text" name="email" style="width:80%; line-height: 20px;" placeholder="E-mail address">
        </div>
        <div class="regis-input-form">
            <input type="text" class="regis-input-form-text" name="phone" style="width:80%; line-height: 20px;" placeholder="Phone Number">
        </div>
        <div class="regis-input-form">
            <input type="text" class="regis-input-form-text" name="address" style="width:80%; margin-bottom: 20px; line-height: 20px;" placeholder="Home Address">
        </div>
        <div class="regis-input-form">
            <select id="gender" type="combobox" class="regis-input-form" name="gender" style="width:81%; line-height: 20px;" required autocomplete="gender">
                <option value="" selected disabled hidden>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="regis-input-form">
            <select id="gender" type="combobox" class="regis-input-form" name="role" style="width:81%; line-height: 20px;" required autocomplete="gender">
                <option value="" selected disabled hidden>Role</option>
                <option value="Male">User</option>
                <option value="Female">Admin</option>
            </select>
        </div>
        <label for="pp" class="regis-input-form">{{ __('Profile Picture') }}</label>
                        <div class="regis-input-form-text" style="margin-top: 20px">
                            <div class="regis-input-pp">
                                <input id="pp" type="file" name="pp" style="font-size: 14px" required autocomplete="pp">
                            </div>
                        </div>
        <div class="regis-input-form">
            <button type="submit" class="regis-input-form-text" style="width:80%; margin-top:20px; line-height: 40px; background-color: lightskyblue; color:white;">UPDATE</button>
        </div>
    </form>
</div>

@endsection

