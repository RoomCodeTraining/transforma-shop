<?php

namespace App\StateMachine\Order;

use Spatie\ModelStates\Exceptions\InvalidConfig;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

abstract class OrderState extends State
{
    /**
     *
     * @var Reservation
     */
    abstract public static function title(): string;
    abstract public function color(): string;
    abstract public function icon(): string;

    /**
     *
     * @return string
     */
    abstract public static function description(): string;

    /**
     *
     * @return StateConfig
     * @throws InvalidConfig
     */
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Confirmed::class)
            ->allowTransition(Confirmed::class, Cancelled::class)
            ->allowTransition(Confirmed::class, DeliveryInProgress::class)
            ->allowTransition(DeliveryInProgress::class, Delivered::class);
    }
}