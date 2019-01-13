<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = $this->data['email'];
        $subject = $this->data['subject'];
        $name = $this->data['fullname'];
        //dd($this->data);
        return $this->view('email.send')
            ->from($address)
            ->cc($address)
            ->bcc($address)
            ->subject($subject)
            ->with('emailmessage', $this->data );
    }

}