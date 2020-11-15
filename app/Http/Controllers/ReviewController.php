<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class ReviewController extends Controller
{
    public function list()
    {
        $review = Comment::all();

        return view('admin.review.list', compact('review'));
    }
}
