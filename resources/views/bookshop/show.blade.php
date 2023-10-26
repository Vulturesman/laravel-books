<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <a href="/">Home</a>

<h1>{{ $bookshop->name }}</h1>
<p>City: {{ $bookshop->city }}</p>

<h2>Books:</h2>
@if($bookshop->books->count() > 0)
    <ul>
        @foreach($bookshop->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@else
    <p>No books available.</p>
@endif


<h2>Another bookshops</h2>
<ul>
    @foreach($bookshops as $shop)
        <li><a href="/bookshop/{{ $shop->id }}">{{ $shop->name }}</a></li>
    @endforeach
</ul>

</body>
</html>