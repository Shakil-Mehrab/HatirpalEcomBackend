<?php

namespace App\Mail\Product;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailForCreatedProduct extends Mailable
{
    use Queueable, SerializesModels;
    protected $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('message.product.created')->with([
            "product" => $this->product,


        ])->subject("New Product Created");
    }
}
