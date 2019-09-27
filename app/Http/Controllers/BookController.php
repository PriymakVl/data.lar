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
        $class_name = 'Book'; //for rating form
    	return view('book.books.base', compact('books', 'class_name'));
    }

    public function index(Request $request, $id)
    {
    	$book = Book::find($id);
    	return view('book.index.base', compact('book'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('book.add.base');
        dd($request->all());
    }

    public function editRating(Request $request)
    {
        // $book = Book::find($request->input('id_item'));
        // (new Book)->setData($this->get->id_book)->setRating($this->get->rating)->setMessage('success', 'edit_rating');
        // $this->redirectPrevious();
    }
}
