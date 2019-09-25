<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function quotes()
    {
        // $books = DB::table('books_old')->get();
        // foreach ($books as $book) {
        //     $obj = Book::find($book->id);
        //     $obj->status = $book->state - 1;
        //     $obj->save();
        // }
        // exit('end');
    	$quotes = Book::orderBy('rating', 'desc')->paginate(5);
    	return view('quote.quotes.base', compact('quotes'));
    }

    public function index($id)
    {
    	$quote = Quote::find($id);
        // dd($book->convertStatus());
    	return view('quote.index.base', compact('quote'));
    }

    public function add(Request $request)
    {
    	$authors = Author::orderBy(['last_name' => SORT_ASC]);
		$books = Book::orderBy(['last_name' => SORT_ASC]);
        if ($request->isMethod('get')) return view('quote.add.base', compact('authors', 'books'));
        dd($request->all());
    }
}
