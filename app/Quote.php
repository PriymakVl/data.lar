<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
	use SoftDeletes;

	protected $table = 'quotes';
    protected $fillable = ['user_id', 'book_id', 'text', 'rating'];

    public function book()
    {
    	return $this->belongsTo('App\Book');
    }

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }

    public function addQuotesFromFile($request)
    {
        $items = file($_FILES['file']['tmp_name']);
        if (!$items) return;
        $quotes = $this->setCharset($items);
        return $this->addQuotes($quotes, $request);
    }
    
    private function setCharset($items)
    {
        foreach ($items as $item) {
            $quotes[] = mb_convert_encoding($item, "UTF-8", "CP1251");
        }
        return $quotes;
    }
    
    private function addQuotes($quotes, $request)
    {
        $conter = 0;
        foreach ($quotes as $quote) {
            if(Qoute::where('text', $quote)) continue;
            $counter++;
            $params = ['author' => $request->author, 'book' => $request->book, 'text' => $quote];
            Quote::create($params);
        }
        return $counter;
    }
}
