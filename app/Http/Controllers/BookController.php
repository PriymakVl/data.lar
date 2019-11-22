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

    public function add(Request $request, $author_id = false)
    {
        if ($request->isMethod('get')) return view('book.add.base', ['author_id' => $author_id]);
        // $request->validate(['title' => 'string|max:255']);
        $book = Book::create($request->all());
        if ($book) return redirect()->route('book', ['id' => $book->id])->with('success', 'Книга успешно добавлена');
        return redirect('books')->with('error', 'Ошибка при добавлении книги');
    }

    public function edit(Request $request)
    {
        $book = Book::find($request->id);
        if ($request->isMethod('post')) return $this->update($request, $book);
        return view('book.edit.base', compact('book'));
    }

    private function update($request, $book)
    {
        $book->update($request->all());
        return redirect()->route('book', ['id' => $book->id])->with('success', 'Книга успешно отредактирована');
    }

    public function delete($id)
    {
        if (Book::destroy($id)) return redirect('books')->with('success', 'Книга успешно удалена');
        return redirect()->back()->with('error', 'Ошибка при удалении книги');
    }

    public function rating(Request $request)
    {
        $this->validate($request, ['rating' => 'integer']);
        Book::where('id', $request->input('id_item'))->update(['rating' => $request->input('rating')]);
        return redirect()->back()->with('success', 'Рейтинг книги успешно изменен');
    }

    public function file(Request $request)
    {
        $id = $request->id;
        if($request->isMethod('post')) return $this->uploadFile($request, $id);
        return view('book.file.base', compact('id'));
    }

    private function uploadFile($request, $id)
    {
        if(!$request->hasFile('book')) return redirect()->route('book', ['id' => $id])->with('error', 'Ошибка при загрузке файла книги');
        $book = Book::find($id);
        $book->uploadFile($request->file('book'));
        return redirect()->route('book', ['id' => $id])->with('success', 'Файл книги успешно загружен');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $books = Book::where('title', 'like', "%{$search}%")->get();
        if ($books->isEmpty()) return redirect()->back()->with('error', 'Книга не найдена');
        else if ($books->count() == 1) return redirect()->route('book', ['id' => $books[0]->id])->with('success', 'Книга успeшно найдена');
        return view('book.search.base', compact('books'))->with('success', 'Найдено несколько книг');
    }
}
