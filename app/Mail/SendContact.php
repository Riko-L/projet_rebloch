<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContact extends Mailable
{


    use Queueable, SerializesModels;


    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
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
        //@TODO regarder le probleme d'email

        return $this->from('admin@localhost')
            ->view('emails.contact')
            ->with([
                'firstname' => $this->data['firstname'],
                'mess' => $this->data['message']
            ]);
    }
}
