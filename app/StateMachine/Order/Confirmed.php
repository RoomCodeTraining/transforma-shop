<?php

namespace App\StateMachine\Order;

use Spatie\ModelStates\Exceptions\InvalidConfig;

class Confirmed extends OrderState
{
    /**
     *
     * @var Order
     */
    public static function title(): string
    {
        return __('confirmed');
    }

    public function color(): string
    {
        return 'info';
    }
    /**
     *
     * @return string
     */
    public static function description(): string
    {
        return __('La commande est confirmée');
    }
}