<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function show($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return response()->json($book->category);
    }
}
