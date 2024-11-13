<?php

// App\Models\Book.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'thumbnail', 'author', 'publisher', 'publication', 'price', 'quantity', 'category_id'
    ];

    // Thiết lập mối quan hệ đến Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

