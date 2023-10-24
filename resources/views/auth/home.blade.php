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
            'current_page' => 'logged'
        ])

    <h1>Welcome back, {{ $user->name }}</h1>


    <form action="{{ route('logout') }}" method="post">
 
        @csrf
    
        <button>Logout</button>
 
    </form>

    </body>
</html>