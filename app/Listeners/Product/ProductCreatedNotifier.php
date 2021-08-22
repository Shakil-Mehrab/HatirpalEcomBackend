<?php

namespace App\Listeners\Product;

use App\Models\Product;
use App\Events\Product\ProductCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\ProductCreatedNotification;

class ProductCreatedNotifier
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProductCreated $event)
    {
        $product = $event->product;
        $product->user->notify(new ProductCreatedNotification($product));
    }
}