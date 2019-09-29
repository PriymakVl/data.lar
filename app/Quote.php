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
}
