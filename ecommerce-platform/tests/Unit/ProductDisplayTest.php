<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Product;
use Faker\Factory as Faker;



class ProductDisplayTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProductDisplay()
    {
        $product = Product::factory()->create([
            'title' => 'Test Product',
            'isbn' => '1234567890123',
            'price' => 9.99,
            'author' => 'Test Author',
            'description' => 'This is a test product',
            'date_published' => '2021-01-01',
            'publisher' => 'Test Publisher',
            'inventory_id' => 1,
            'category_id' => 1,
            'image' => 'test.jpg',
        ]);
        
        $response = $this->get('/multiple-products');
        $response->assertStatus(200);
        
        $response->assertSee('Test Product');
        $response->assertSee('£9.99');
        // $response->assertSee('Test Author');
        // $response->assertSee('This is a test product');
        $response->assertSee('test.jpg');


    }
}