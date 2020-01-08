<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="/css/homecontent.css">
    <link rel="stylesheet" href="/css/login.css"> 
    <link rel="stylesheet" href="/css/register.css"> 
    
</head>
<body>
    <div class="grid-container">
        <div class="grid-header">
            <div class="left-text-header">
               <a href="/" style="text-decoration:none; color:white; font-size:30px;">Mimi Shop</a>
            </div>
            <div class="right-text-header">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            </div>
        </div>
        
        @yield('content')

        <div class="grid-footer" id="grid-footer-style">&copy; 2019 Copyright: Bluejack 17-2</div>
      </div>
</body>
</html>