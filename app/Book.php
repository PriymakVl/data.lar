<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Author;

class Book extends Model
{
	use SoftDeletes;
	
	const STATUS_NOT_READ = 1;
	const STATUS_SPEED_READ = 2;
	const STATUS_READ = 3;
	const STATUS_AUDIO = 4;
	const STATUS_OUTLINED = 5; //законспектирована
	
    protected $table = 'books';
    protected $fillable = ['title', 'rating', 'user_id', 'status'];


    public function author()
	{
		return $this->belongsTo('App\Author');
	}

	public static function convertStatus($status)
	{
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
