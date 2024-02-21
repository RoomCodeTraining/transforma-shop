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

    public function icon(): string
    {
        return 'heroicon-o-check-circle';
    }
    /**
     *
     * @return string
     */
    public static function description(): string
    {
        return __('Confirmée');
    }
}