<?php
namespace App\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Book;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quotes = DB::table('quotes')->get();
        foreach ($quotes as $quote) {
        	$obj = new Quote;
        	$obj->text = $quote->text;
        	$obj->rating = $quote->rating;
        	$obj->save();
        }
    }
}
