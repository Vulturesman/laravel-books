<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Great Book Shop</title>
    @vite('resources/css/app.scss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
 <body>

    @include('common/navigation', [
            'current_page' => 'login'
        ])

<h1>Login</h1>

<form action="{{ route('login') }}" method="post">
 
    @csrf
    
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}">
 
    <label for="password">Password</label>
    <input type="password" name="password" value="">
 
    <button>Login</button>
 
</form>

    </body>
</html>