<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Author;
use App\File;

class Book extends Model
{
	use SoftDeletes;
	
	const STATUS_NOT_READ = 1;
	const STATUS_SPEED_READ = 2;
	const STATUS_READ = 3;
	const STATUS_AUDIO = 4;
	const STATUS_OUTLINED = 5; //законспектирована
	
    protected $table = 'books';
    protected $fillable = ['title', 'rating', 'author_id', 'status', 'description'];


    public function author()
	{
		return $this->belongsTo('App\Author');
	}

	public function quotes()
	{
		 return $this->hasMany('App\Quote');
	}

	public function countQuotes()
	{
		return $this->quotes ? count($this->quotes) : 0;
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

	public function uploadFile($file)
	{
		$this->filename = File::upload($file, 'files/books');
		if ($this->filename) return $this->save();
	}
}
