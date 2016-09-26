<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint@integer;
class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_isbn',50);
            $table->string('book_name',500);
            $table->string('book_icon',100);
            $table->string('book_author',500);
            $table->integer('book_category')->unsigned();
            $table->string('book_language',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book');
    }
}
