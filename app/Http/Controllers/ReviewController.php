<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'text' => 'required|max:255',
        ]);

        try {
            $review = new Review();
            $review->book_id = $book_id;
            $review->user_id = Auth::id();
            $review->text = $request->text;
            $review->save();

            return back()->with('success', 'Review was successfully saved.');
        } catch (QueryException $e) {
            return back()->with('error', 'Sorry, your review has already been submitted.');
        }
    }

    public function delete($id, $review_id)
    {
        Review::findOrFail($review_id)->delete();
        return redirect()->back();
    }
}
