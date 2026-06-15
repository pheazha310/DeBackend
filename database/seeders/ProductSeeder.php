<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Wireless Headphones', 'description' => 'Premium noise-cancelling headphones', 'price' => 199.99, 'stock' => 50, 'category' => 'Electronics', 'sku' => 'ELEC-001', 'is_active' => true],
            ['name' => 'Mechanical Keyboard',  'description' => 'TKL mechanical keyboard with RGB', 'price' => 129.99, 'stock' => 30, 'category' => 'Electronics', 'sku' => 'ELEC-002', 'is_active' => true],
            ['name' => 'USB-C Hub',            'description' => '7-in-1 USB-C multiport adapter',   'price' => 49.99,  'stock' => 100,'category' => 'Electronics', 'sku' => 'ELEC-003', 'is_active' => true],
            ['name' => 'Desk Lamp',            'description' => 'LED desk lamp with adjustable color temperature', 'price' => 39.99, 'stock' => 75, 'category' => 'Furniture', 'sku' => 'FURN-001', 'is_active' => true],
            ['name' => 'Ergonomic Mouse',      'description' => 'Vertical ergonomic wireless mouse', 'price' => 59.99, 'stock' => 60, 'category' => 'Electronics', 'sku' => 'ELEC-004', 'is_active' => false],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
