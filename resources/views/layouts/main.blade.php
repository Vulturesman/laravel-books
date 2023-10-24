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
            'current_page' => $current_page
        ])

        @yield('content')

        <div id="partners"></div>

         <ul id="latest-books"></ul>

        <div id="loader" class="rotate">
            <img id="cat" src="assets/img/cat.png" alt="rotating cat" />
        </div>

        @viteReactRefresh
        @vite('resources/js/partners.jsx')
        @vite('resources/js/latest-books.js')

    </body>
</html>