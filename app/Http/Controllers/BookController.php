<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function show($book_id)
    {
        $book = Book::with('reviews.user')->findOrFail($book_id);

        return view('books.show', compact('book'));
    }
}
