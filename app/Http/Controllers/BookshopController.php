<?php

namespace App\Http\Controllers;

use App\Models\Bookshop;
use Illuminate\Http\Request;

class BookshopController extends Controller
{
    public function show($bookshop_id)
    {
        $bookshop = Bookshop::with('books')->findOrFail($bookshop_id);
        $bookshops = Bookshop::all();

        return view('bookshop.show', compact('bookshop', 'bookshops'));
    }
}
