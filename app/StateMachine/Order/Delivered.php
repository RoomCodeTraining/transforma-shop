<?php
namespace App\StateMachine\Order;

use Spatie\ModelStates\Exceptions\InvalidConfig;

class Delivered extends OrderState
{
    /**
     *
     * @var Order
     */
    public static function title(): string
    {
        return __('delivered');
    }

    public function color(): string
    {
        return 'success';
    }

    /**
     *
     * @return string
     */
    public static function description(): string
    {
        return __('La commande est livrée');
    }
}