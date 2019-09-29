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
        $quote = Quote::create($request->all());
        if ($quote) return redirect()->route('quote', ['id' => $quote->id])->with('success', 'Цитата успешно добавлен');
        return redirect('quotes')->with('error', 'Ошибка при добавлении цитата');
    }

    public function show($id)
    {
        $quote = Quote::find($id);
        return view('quote.edit.base', compact('quote'));
    }

     public function edit(Request $request)
    {
        $result = DB::table('quotes')->where('id', $request->post('id'))->update($request->all());
        dd($result);
        // if ($quote) return redirect()->route('quote', ['id' => $quote->id])->with('success', 'Цитата успешно отредактирована');
        // return redirect('quotes')->with('error', 'Ошибка при редакт');
    }
}
