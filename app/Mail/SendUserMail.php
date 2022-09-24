<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('view.name');
       return $this->from('nnezan9@gmail.com', 'Mailtrap')
            ->subject('Mailtrap Confirmation')
            ->markdown('send-user-mail')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => '/inboxes/'
            ]);
    }
}
