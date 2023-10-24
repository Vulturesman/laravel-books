<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $crime_books = Book::where('category_id', 12)
            ->orderBy('publication_date', 'desc')
            ->with('authors')
            ->limit(10)
            ->get();

        return view('index.index', compact('crime_books'));
    }
}
