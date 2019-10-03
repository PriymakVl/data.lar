<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTableBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `books` MODIFY `description` TEXT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `author_id` INTEGER NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `filename` VARCHAR (255) NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `description` TEXT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `status` INTEGER NOT NULL DEFAULT 1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `books` MODIFY `description` TEXT NOT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `author_id` INTEGER NOT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `filename` VARCHAR (255) NOT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `description` TEXT NOT NULL;');
        DB::statement('ALTER TABLE `books` MODIFY `status` INTEGER NOT NULL DEFAULT 0;');
    }
}
