<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => 'Alimentaire',
            'slug' => 'alimentaire',
            'description' => 'Catégorie des produits alimentaires et conbusibles',
        ]);

        // tableau des produits faire a base d'huile de palme

        $products = [
            [
                'name' => 'Huile de palme',
                'slug' => 'huile-de-palme',
            ],
            [
                'name' => 'Savon',
                'slug' => 'savon',
            ],
            [
                'name' => 'Creme',
                'slug' => 'creme',
            ],
            [
                'name' => 'Savon liquide',
                'slug' => 'savon-liquide',
            ],
            [
                'name' => 'Savon en poudre',
                'slug' => 'savon-en-poudre',
            ],
            [
                'name' => 'Savon en liquide',
                'slug' => 'savon-en-liquide',
            ],
            [
                'name' => 'Beurre de karité',
                'slug' => 'beurre-de-karite',
            ]
        ];

        foreach($products as $product) {
            \App\Models\Product::factory()->create([
                'name' => $product['name'],
                'slug' => $product['slug'],
            ]);
        }
    }
}