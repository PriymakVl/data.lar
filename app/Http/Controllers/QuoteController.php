<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function quotes()
    {

    	$quotes = Quote::orderBy('rating', 'desc')->paginate(5);
    	return view('quote.quotes.base', compact('quotes'));
    }

    public function index($id)
    {
    	$quote = Quote::find($id);
    	return view('quote.index.base', compact('quote'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) return view('quote.add.base');
  //       dd($request->all());
    }
}
