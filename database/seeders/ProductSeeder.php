<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::create([
            'name' => 'Biogas',
            'price' => '17000',
            'image' => 'produk/biogas.jpg',
            'size' => '230g',
        ]);
        $product = Product::create([
            'name' => 'Biochar',
            'price' => '7500',
            'image' => 'produk/biochar.jpg',
            'size' => '500g',
        ]);
        $product = Product::create([
            'name' => 'Biofuel',
            'price' => '10000',
            'image' => 'produk/biofuel.jpg',
            'size' => '0,8 liter',
        ]);
    }
}
