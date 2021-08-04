<?php

namespace App\Mail;

use App\Models\Supplier;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailForSupplierApproved extends Mailable
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

        return $this->view('message.supplier.approved')->with([
            "supplier" => $this->supplier
        ])->subject("Approved as Supplier");
    }
}
