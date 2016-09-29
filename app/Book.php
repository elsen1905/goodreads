<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';	
    protected $fillable = ['isbn', 'name','icon', 'author', 'category', 'language','description'];
}	
