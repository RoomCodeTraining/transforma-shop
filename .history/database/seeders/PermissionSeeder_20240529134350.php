<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createUser = Permission::create(['name' => \App\Enums\Permission::CREATE_USER, 'guard_name' => 'web', 'label' => 'Créer un utilisateur']);
        $viewUser = Permission::create(['name' => \App\Enums\Permission::VIEW_USER, 'guard_name' => 'web', 'label' => 'Voir un utilisateur']);
        $updateUser = Permission::create(['name' => \App\Enums\Permission::UPDATE_USER, 'guard_name' => 'web', 'label' => 'Modifier un utilisateur']);
        $deleteUser = Permission::create(['name' => \App\Enums\Permission::DELETE_USER, 'guard_name' => 'web', 'label' => 'Supprimer un utilisateur']);


        $createCategory = Permission::create(['name' => \App\Enums\Permission::CREATE_CATEGORY, 'guard_name' => 'web', 'label' => 'Créer une catégorie']);
        $viewCategory = Permission::create(['name' => \App\Enums\Permission::VIEW_CATEGORY, 'guard_name' => 'web', 'label' => 'Voir une catégorie']);
        $updateCategory = Permission::create(['name' => \App\Enums\Permission::UPDATE_CATEGORY, 'guard_name' => 'web', 'label' => 'Modifier une catégorie']);
        $deleteCategory = Permission::create(['name' => \App\Enums\Permission::DELETE_CATEGORY, 'guard_name' => 'web', 'label' => 'Supprimer une catégorie']);

        $createProduct = Permission::create(['name' => \App\Enums\Permission::CREATE_PRODUCT, 'guard_name' => 'web', 'label' => 'Créer un produit']);
        $viewProduct = Permission::create(['name' => \App\Enums\Permission::VIEW_PRODUCT, 'guard_name' => 'web', 'label' => 'Voir un produit']);
        $updateProduct = Permission::create(['name' => \App\Enums\Permission::UPDATE_PRODUCT, 'guard_name' => 'web', 'label' => 'Modifier un produit']);
        $deleteProduct = Permission::create(['name' => \App\Enums\Permission::DELETE_PRODUCT, 'guard_name' => 'web', 'label' => 'Supprimer un produit']);


        $createOrder = Permission::create(['name' => \App\Enums\Permission::CREATE_ORDER, 'guard_name' => 'web', 'label' => 'Créer une commande']);
        $viewOrder = Permission::create(['name' => \App\Enums\Permission::VIEW_ORDER, 'guard_name' => 'web', 'label' => 'Voir une commande']);
        $updateOrder = Permission::create(['name' => \App\Enums\Permission::UPDATE_ORDER, 'guard_name' => 'web', 'label' => 'Modifier une commande']);
        $deleteOrder = Permission::create(['name' => \App\Enums\Permission::DELETE_ORDER, 'guard_name' => 'web', 'label' => 'Supprimer une commande']);


        Role::create([
            'name' =>  \App\Enums\Role::ADMIN,
            'guard_name' => 'web',
            'label' => 'Administrateur'
        ])->givePermissionTo([
            $createUser,
            $viewUser,
            $updateUser,
            $deleteUser,
            $createCategory,
            $viewCategory,
            $updateCategory,
            $deleteCategory,
            $createProduct,
            $viewProduct,
            $updateProduct,
            $deleteProduct,
            $createOrder,
            $viewOrder,
            $updateOrder,
            $deleteOrder
        ]);

        Role::create([
            'name' =>  \App\Enums\Role::SUPER_ADMIN,
            'guard_name' => 'web',
            'label' => 'Super Administrateur'
        ])->givePermissionTo([
            $createUser,
            $viewUser,
            $updateUser,
            $deleteUser,
            $createCategory,
            $viewCategory,
            $updateCategory,
            $deleteCategory,
            $createProduct,
            $viewProduct,
            $updateProduct,
            $deleteProduct,
            $createOrder,
            $viewOrder,
            $updateOrder,
            $deleteOrder
        ]);

        Role::create([
            'name' =>  \App\Enums\Role::SELLER,
            'guard_name' => 'web',
            'label' => 'Gestionnaire de commande'
        ])->givePermissionTo([
            $createOrder,
            $viewOrder,
            $updateOrder,
            $deleteOrder
        ]);

        Role::create([
            'name' =>  \App\Enums\Role::CUSTOMER,
            'guard_name' => 'web',
            'label' => 'Client'
        ])->givePermissionTo([
            $viewProduct,
            $viewCategory,
            $createOrder,
            $viewOrder,
            $updateOrder,
            $deleteOrder
        ]);


    }
}
