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
        $class_name = 'book'; //for rating form
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

    public function rating(Request $request)
    {
        Book::where('id', $request->input('id_item'))->update(['rating' => $request->input('rating')]);
        return redirect()->back()->with('success', 'Рейтинг книги изменен');
    }
}
