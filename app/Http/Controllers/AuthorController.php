<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function authors()
    {
    	$authors = Author::orderBy('last_name', 'desc')->paginate(5);
    	return view('author.authors.base', compact('authors'));
    }

    public function index($id)
    {
    	$author = Author::find($id);
    	return view('author.index.base', compact('author'));
    }

    public function delete($id)
    {
        if (Author::destroy($id)) return redirect('authors')->with('success', 'Автор успешно удален');
        return redirect()->back()->with('error', 'Ошибка при удалении автора');
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('author.add.base');
        // $request->validate(['first_name' => 'max:100', 'last_name' =>'required|max:100']);
        $author = Author::create($request->all());
        if ($author) return redirect()->route('author', ['id' => $author->id])->with('success', 'Автор успешно добавлен');
        return redirect('authors')->with('error', 'Ошибка при добавлении автора');
    }

    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        if ($request->isMethod('post')) return $this->update($request, $author);
        return view('author.edit.base', compact('author'));
    }

    private function update($request, $author)
    {
        $author->update($request->all());
        return redirect()->route('author', ['id' => $author->id])->with('success', 'Автор успешно отредактирован');
    }
}
