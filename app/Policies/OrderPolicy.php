<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_ORDER);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $loggedInUser, Order $order): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::VIEW_ORDER);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $loggedInUser): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::CREATE_ORDER);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $loggedInUser, Order $order): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::UPDATE_ORDER);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $loggedInUser, Order $order): bool
    {
        return $loggedInUser->can(\App\Enums\Permission::DELETE_ORDER);
    }

}
