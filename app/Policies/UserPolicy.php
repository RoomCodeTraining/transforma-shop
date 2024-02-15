<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_USER);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $loggedInUser, User $user): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_USER);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::CREATE_USER);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $loggedInUser, User $user): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::UPDATE_USER);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $loggedInUser, User $user): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::DELETE_USER);
    }


}
