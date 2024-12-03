<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'grade',
        'available_units',
        'category_id',
        'picture_id',
        'author_id'
    ];

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->belongsTo(Picture::class);
    }
}
