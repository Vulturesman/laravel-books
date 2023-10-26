<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function latest()
    {
        $books = DB::select(
            "
            SELECT *
            FROM `books`
            ORDER BY `publication_date` DESC
            LIMIT 10
        ",
            []
        );

        return $books;
    }

    public function show()
    {
        return view('detail.book');
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $books = Book::where('title', 'like', "%{$search}%")->limit(10)->get();

        return $books;
    }
}
