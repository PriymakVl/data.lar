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
        // Author::destroy($id)
        if (false) return redirect()->route('authors')->with('message', 'success');
        return redirect()->back()->with('message', 'error');
    }
}
