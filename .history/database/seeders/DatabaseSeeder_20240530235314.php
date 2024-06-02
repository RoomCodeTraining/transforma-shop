<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
          PermissionSeeder::class,
          UserSeeder::class,
          CategorySeeder::class,
        ]);

        for($i = 0; $i < 100; $i++) {
            $order =  \App\Models\Order::create([
               'reference' => Str::random(10),
               'created_at' => now()->subDays(rand(1, 365)),
               'user_id' => \App\Models\User::inRandomOrder()->first()->id,
             ]);

            $order->items()->create([
              'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
              'quantity' => rand(1, 10),
            ]);

        }
    }
}