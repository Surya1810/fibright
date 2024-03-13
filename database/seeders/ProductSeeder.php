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
            'price' => '50000',
            'image' => 'produk/biogas.jpg',
            'size' => '1000ml',
        ]);
        $product = Product::create([
            'name' => 'Biochar',
            'price' => '7500',
            'image' => 'produk/biochar.jpg',
            'size' => '10 pcs',
        ]);
        $product = Product::create([
            'name' => 'Biofuel',
            'price' => '45000',
            'image' => 'produk/biofuel.jpg',
            'size' => '3000ml',
        ]);
    }
}
