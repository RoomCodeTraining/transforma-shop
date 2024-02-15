<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_CATEGORY);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $loggedInUser, Category $category): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_CATEGORY);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::CREATE_CATEGORY);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $loggedInUser, Category $category): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::UPDATE_CATEGORY);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $loggedInUser, Category $category): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::DELETE_CATEGORY);
    }

}
