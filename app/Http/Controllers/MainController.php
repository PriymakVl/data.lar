<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
use App\Book;
use App\Author;

class MainController extends Controller
{
    public function index()
    {
    	$qty['quotes'] = Quote::count();
    	$qty['books'] = Book::count();
    	$qty['authors'] = Author::count();
    	return view('main.index.base', compact('qty'));
    }
}
