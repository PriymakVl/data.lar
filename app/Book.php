<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	const STATE_NOT_READ = 1;
	const STATE_SPEED_READ = 2;
	const STATE_READ = 3;
	const STATE_AUDIO = 4;
	const STATE_OUTLINED = 5; //законспектирована
	
    protected $table = 'books';
    public $timestamps = false;


    public function author()
	{
		// if ($this->id_author) $this->author = new Author($this->id_author);
		// return $this;
	}

	public function convertState($state = null)
	{
		$state = $state ? $state : $this->state;
		switch ($state) {
			case self::STATE_NOT_READ: return 'не прочитана';
			case self::STATE_SPEED_READ: return 'просмотрена';
			case self::STATE_READ: return 'прочитана';
			case self::STATE_AUDIO: return 'прослушана';
			case self::STATE_OUTLINED: return 'законспектирована';
			default: return 'не известно';
		}
	}
}
