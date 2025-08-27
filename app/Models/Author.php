<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[ApiResource]
class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'birth_date',
    ];

    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
