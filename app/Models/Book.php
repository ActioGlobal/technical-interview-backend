<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[ApiResource]
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'description',
        'author',
        'publication_date',
        'author_id',
        'category_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
