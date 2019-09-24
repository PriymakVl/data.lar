<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function books()
    {
        // $books = DB::table('books_old')->get();
        // foreach ($books as $book) {
        //     $obj = Book::find($book->id);
        //     $obj->status = $book->state - 1;
        //     $obj->save();
        // }
        // exit('end');
    	$books = Book::orderBy('rating', 'desc')->paginate(5);
    	return view('book.books.base', compact('books'));
    }

    public function index($id)
    {
    	$book = Book::find($id);
        // dd($book->convertStatus());
    	return view('book.index.base', compact('book'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('book.add.base');
        dd($request->all());
    }
}
