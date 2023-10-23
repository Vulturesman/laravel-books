<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Great Book Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <style>
        .highlighted {
            font-size: 1.2rem;
        }
    </style>
    
</head>
    <body>

        @include('common/navigation', [
            'current_page' => $current_page
        ])

        @yield('content')


    </body>
</html>