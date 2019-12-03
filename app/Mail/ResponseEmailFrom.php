<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResponseEmailFrom extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact_info)
    {
        //
        $this->contact_info = $contact_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.fromEmailCG')->with(compact('contact_info'));
    }
}
