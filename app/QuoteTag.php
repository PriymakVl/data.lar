<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteTag extends Model
{
   	use SoftDeletes;

	protected $table = 'quotes_tags';
    protected $fillable = ['quote_id', 'tag_id'];
}
