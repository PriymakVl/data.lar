<?php
namespace App\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = DB::table('books')->get();
        foreach ($books as $book) {
        	$obj = new Book;
        	$obj->title = $book->title;
        	$obj->author_id = $book->id_author;
        	$obj->description = $book->description;
        	$obj->filename = $book->filename;
        	$obj->rating = $book->rating;
        	$obj->save();
        }
    }
}
