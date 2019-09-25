<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function authors()
    {
        dump(session('message'));
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
        // Author::destroy($id)
        if (false) return redirect()->route('authors')->with('message', 'success');
        return redirect()->back()->with('message', 'error');
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('author.add.base');
        // $author = Author::create($request->all());
        // if ($author) return redirect()->route('author', ['id' => $author->id]);//->with('message', 'success');
        // else redirect()->route('authors');//->with('message', 'error');
        return redirect('/authors')->with('message', 'error');
    }
}
