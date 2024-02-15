<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Permission extends Enum
{
    const VIEW_USER = 'user.view';
    const CREATE_USER = 'user.create';
    const UPDATE_USER = 'user.update';
    const DELETE_USER = 'user.delete';

    const VIEW_ROLE = 'role.view';
    const CREATE_ROLE = 'role.create';
    const UPDATE_ROLE = 'role.update';
    const DELETE_ROLE = 'role.delete';


    const VIEW_PRODUCT = 'product.view';
    const CREATE_PRODUCT = 'product.create';
    const UPDATE_PRODUCT = 'product.update';
    const DELETE_PRODUCT = 'product.delete';

    const VIEW_CATEGORY = 'category.view';
    const CREATE_CATEGORY = 'category.create';
    const UPDATE_CATEGORY = 'category.update';
    const DELETE_CATEGORY = 'category.delete';


    const VIEW_ORDER = 'order.view';
    const CREATE_ORDER = 'order.create';
    const UPDATE_ORDER = 'order.update';
    const DELETE_ORDER = 'order.delete';
}
