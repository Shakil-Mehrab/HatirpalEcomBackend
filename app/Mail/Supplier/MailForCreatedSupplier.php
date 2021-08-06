<?php

namespace App\Mail\Supplier;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Supplier;

class MailForCreatedSupplier extends Mailable
{
    use Queueable, SerializesModels;
    protected $supplier;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('message.supplier.created')->with([
            "supplier" => $this->supplier
        ])->subject("New Supplier Created");
    }
}
