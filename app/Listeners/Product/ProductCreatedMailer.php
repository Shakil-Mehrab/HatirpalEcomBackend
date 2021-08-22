<?php

namespace App\Listeners\Product;

use Illuminate\Support\Facades\Mail;
use App\Events\Product\ProductCreated;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Product\MailForCreatedProduct;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductCreatedMailer
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        Mail::to('mehrabhoussainshakil4@gmail.com')->send(new  MailForCreatedProduct($product));
    }
}
