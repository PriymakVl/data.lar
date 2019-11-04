<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuoteTag extends Model
{
   	use SoftDeletes;

	protected $table = 'quotes_tags';
    protected $fillable = ['quote_id', 'tag_id'];

    public function add($tag_id, $quote_id)
    {
    	return self::create(['tag_id' => $tag_id, 'quote_id' => $quote_id]);
    }

    public function tag()
    {
    	return $this->hasOne('App\Tag', 'id', 'tag_id');
    }
}
