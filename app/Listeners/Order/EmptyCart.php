<?php

namespace App\Listeners\Order;

use App\Cart\Cart;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmptyCart
{
    protected $cart;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Cart $cart)
    {
        $this->cart=$cart;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $this->cart->empty();
    }
}
