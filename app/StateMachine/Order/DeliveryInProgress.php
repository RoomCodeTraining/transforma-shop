<?php
namespace App\StateMachine\Order;

use Spatie\ModelStates\Exceptions\InvalidConfig;

class DeliveryInProgress extends OrderState
{
    /**
     *
     * @var Order
     */
    public static function title(): string
    {
        return __('delivery_in_progress');
    }

    public function color(): string
    {
        return 'secondary';
    }
    /**
     *
     * @return string
     */
    public static function description(): string
    {
        return __('La commande est en cours de livraison');
    }
}