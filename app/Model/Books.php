<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'book_title', 'author', 'description',
    ];
}
