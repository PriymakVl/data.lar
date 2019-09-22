<?php
namespace App\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = DB::table('authors')->get();
        foreach ($authors as $author) {
        	$obj = new Author;
        	$obj->first_name = $author->first_name;
        	$obj->last_name = $author->last_name;
        	$obj->middle_name = $author->patronymic;
        	$obj->date_birth = $author->data_birth;
        	$obj->save();
        }
    }
}
