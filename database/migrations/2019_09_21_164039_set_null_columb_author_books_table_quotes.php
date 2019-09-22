<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetNullColumbAuthorBooksTableQuotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->integer('author_id')->nullable()->change();
            $table->integer('book_id')->nullable()->change();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('quotes', function (Blueprint $table) {
            $table->integer('author_id')->nullable(false)->change();
            $table->integer('book_id')->nullable(false)->change();
        });
    }
}
