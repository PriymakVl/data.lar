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

    public function index(Request $request, $id)
    {
    	$book = Book::find($id);
    	return view('book.index.base', compact('book'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('book.add.base');
        $request->validate(['title' => 'string|max:255']);
        $book = Book::create($request->all());
        if ($book) return redirect()->route('book', ['id' => $book->id])->with('success', 'Книга успешно добавлена');
        return redirect('books')->with('error', 'Ошибка при добавлении книги');
    }

    public function rating(Request $request)
    {
        $this->validate($request, ['rating' => 'integer']);
        Book::where('id', $request->input('id_item'))->update(['rating' => $request->input('rating')]);
        return redirect()->back()->with('success', 'Рейтинг книги успешно изменен');
    }
}
