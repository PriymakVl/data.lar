<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function books()
    {
    	$books = Book::orderBy('rating', 'desc')->paginate(5);
    	return view('book.books.base', compact('books'));
    }

    public function index($id)
    {
    	$book = Book::find($id);
    	return view('book.index.base', compact('book'));
    }
}
