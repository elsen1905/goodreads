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
            $table->increments('id');
            $table->string('isbn',50);
            $table->string('name',500);
            $table->string('icon',100);
            $table->string('author',500);
            $table->integer('category')->unsigned();
            $table->string('language',100);
            $table->string('description', 5000);
            $table->integer('seen')->unsigned();
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
