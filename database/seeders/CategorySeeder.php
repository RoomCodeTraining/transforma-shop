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

        \App\Models\Product::factory(20)->create();
    }
}
