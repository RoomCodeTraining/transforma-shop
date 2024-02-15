<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_PRODUCT);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $loggedInUser, Product $product): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_PRODUCT);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::CREATE_PRODUCT);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $loggedInUser, Product $product): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::UPDATE_PRODUCT);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $loggedInUser, Product $product): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::DELETE_PRODUCT);
    }

}
