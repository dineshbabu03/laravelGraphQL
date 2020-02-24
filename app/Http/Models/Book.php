<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'book_id', 'id');
    }
}
