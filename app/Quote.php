<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
	use SoftDeletes;

	protected $table = 'quotes';
    protected $fillable = ['author_id', 'book_id', 'text', 'rating'];

    public function book()
    {
    	return $this->belongsTo('App\Book');
    }

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }

    public static function addQuotesFromFile($request)
    {
        $items = file($_FILES['quotes']['tmp_name']);
        if (!$items) return;
        $quotes = self::setCharset($items);
        return self::addQuotes($quotes, $request);
    }
    
    private static function setCharset($items)
    {
        foreach ($items as $item) {
            $quotes[] = mb_convert_encoding($item, "UTF-8", "CP1251");
        }
        return $quotes;
    }
    
    private static function addQuotes($quotes, $request)
    {
        $counter = 0;
        foreach ($quotes as $quote) {
            $quote = str_replace(["\r\n", "\r", "\n"], '',  $quote);
            if(self::where('text', $quote)->first()) continue;
            $counter++;
            $params = ['author_id' => $request->author_id, 'book_id' => $request->book_id, 'text' => $quote, 'rating' => 0];
            $quote = self::create($params);
            if ($request->tag_id) QuoteTag::add($request->tag_id, $quote->id);
        }
        return $counter;
    }

    public function tags()
    {
        return $this->hasMany('App\QuoteTag', 'quote_id');
    }
}
