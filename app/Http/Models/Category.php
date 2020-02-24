<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class, 'book_id', 'id');
    }
}
