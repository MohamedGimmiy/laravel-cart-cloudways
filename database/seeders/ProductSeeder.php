<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Apple Macbook Pro 16',
            'details' => 'Apple M1 Pro, 16GPU',
            'description' => 'apple description is my favorite application',
            'brand' => 'Apple',
            'price' => 2499,
            'shipping_cost' => 25,
            'image_path' => '/storage/product.png'],
            ['name' => 'Samsung Galaxy Book Pro',
            'details' => 'Samsung Galaxy Book Pro',
            'description' => 'Samsung Galaxy Book Pro is a great choice for your organization',
            'brand' => 'Samsung',
            'price' => 2000,
            'shipping_cost' => 15,
            'image_path' => '/storage/product2.png'],

        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
