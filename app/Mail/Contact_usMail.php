<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact_usMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $message;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$message)
    {
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'info@mykitchencoeg.com';
        $name = 'my kitchenco eg';
        $subject = 'Contact Form Message';
        return $this->to($this->email)->subject($subject)->from($address, $name)->
        markdown('emails.contact_us_email',[
            'email' => $this->email,
            'details' => $this->message,
        ]);

    }

    
}
