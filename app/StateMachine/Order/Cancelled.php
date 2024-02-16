<?php
namespace App\StateMachine\Order;

use Spatie\ModelStates\Exceptions\InvalidConfig;

class Cancelled extends OrderState
{
    /**
     *
     * @var Order
     */
    public static function title(): string
    {
        return __('cancelled');
    }

    public function color(): string
    {
        return 'danger';
    }
    /**
     *
     * @return string
     */
    public static function description(): string
    {
        return __('La commande est annulée');
    }
}