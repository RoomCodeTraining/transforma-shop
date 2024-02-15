<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@tr.ci',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'current_role_id' => Role::firstWhere('name', \App\Enums\Role::ADMIN)->id,
                'contact' => '0123456789'
            ],
            [
                'first_name' => 'Seller',
                'last_name' => 'Seller',
                'email' => 'seller@tr.ci',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'current_role_id' => Role::firstWhere('name', \App\Enums\Role::SELLER)->id,
                'contact' => '0123456789',
            ],
            [
                'first_name' => 'Customer',
                'last_name' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'current_role_id' => Role::firstWhere('name', \App\Enums\Role::CUSTOMER)->id,
                'contact' => '0123456789',
            ],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'super@tr.ci',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'current_role_id' => Role::firstWhere('name', \App\Enums\Role::SUPER_ADMIN)->id,
                'contact' => '0123456789',
            ]
        ];


        foreach($users as $user) {
            $user = \App\Models\User::create(array_merge($user, ['identifier' => \Illuminate\Support\Str::uuid()]));
            $user->assignRole($user->current_role_id);
        }
    }
}
