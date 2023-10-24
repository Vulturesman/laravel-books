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
            'current_page' => 'register'
        ])

<h1>Registration</h1>

        <form action="{{ route('register') }}" method="post">
        
            @csrf
        
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}">
            <br>
        
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}">
            <br>
        
            <label for="password">Password</label>
            <input id="password" type="password" name="password" value="">
            <br>
        
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" value="">
            <br>
        
            <button>Register</button>
        
        </form>

    </body>
</html>