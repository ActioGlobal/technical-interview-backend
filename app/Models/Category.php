<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Link;

#[ApiResource(
    operations: [
        new GetCollection(
            uriTemplate: '/books/{id}/categories',
            uriVariables: [
                'id' => new Link(
                    fromClass: Book::class,
                    fromProperty: 'category'
                )
            ]
        )
    ]
)]
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
