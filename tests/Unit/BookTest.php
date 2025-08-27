<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function checkIsBookHasCategory(): void
    {
        $category = Category::factory()->create();

        $book = Book::factory()->create([
            'category' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $book->category);
        $this->assertEquals($category->id, $book->category->id);
    }
}