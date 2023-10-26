<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <a href="/">Home</a>
    <h1>{{ $book->title }}</h1>
    <p>{{ strip_tags(htmlspecialchars_decode($book->description)) }}</p>
   
    <img src="{{ $book->image }}" alt="{{$book->title}}">

        @if($book->reviews->count() > 0)
                    <h2>Reviews:</h2>
                
                    <table>
                        <thead>
                            <tr>
                                <th>Review</th>
                                <th>By</th>
                                @if(Auth::check() && Auth::user()->role === 'admin')
                                    <th>Delete</th>
                                @endif
                            </tr>
                        </thead>

                     @foreach($book->reviews as $review)
                        <tbody>
                            <tr>
                                <td>{{ $review->text }}</td>
                                <td>{{ $review->user->name }}</td>

                                @if(Auth::check() && Auth::user()->role === 'admin')
                                    <td> <form method="POST" action="/books/{{ $book->id }}/reviews/{{ $review->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">X</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        </tbody>
                     @endforeach
                       
                    </table>
               
            @else
                <p>Book is most likely shitty, that's why no reviews.</p>
        @endif


     @if(Auth::check())
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/book/{{ $book->id }}/review">
            @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div>
                <label for="text">Review:</label>
                <textarea id="text" name="text">{{ old('text') }}</textarea>
            </div>
            <div>
                <button type="submit">Submit Review</button>
            </div>
        </form>
    @endif


</body>
</html>