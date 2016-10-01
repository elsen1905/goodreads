<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';	
    protected $fillable = ['author_id', 'author_name','author_photo', 'author_biography', 'author_books'];
}
