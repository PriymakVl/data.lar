<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Author;

class Book extends Model
{
	use SoftDeletes;
	
	const STATUS_NOT_READ = 0;
	const STATUS_SPEED_READ = 1;
	const STATUS_READ = 2;
	const STATUS_AUDIO = 3;
	const STATUS_OUTLINED = 4; //законспектирована
	
    protected $table = 'books';
    protected $fillable = ['title', 'rating', 'user_id'];


    public function author()
	{
		return $this->belongsTo('App\Author');
	}

	public function getStatusAttribute($status = null)
	{
		$status = $status ? $status : $this->status;
		switch ($status) {
			case self::STATUS_NOT_READ: return 'не прочитана';
			case self::STATUS_SPEED_READ: return 'просмотрена';
			case self::STATUS_READ: return 'прочитана';
			case self::STATUS_AUDIO: return 'прослушана';
			case self::STATUS_OUTLINED: return 'законспектирована';
			default: return 'не известно';
		}
	}
}
