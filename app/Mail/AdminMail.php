<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $email_recipients;
    protected $user;

    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        return $this
                    ->subject("Neue Kunden-Registrierung (Kunden-Nr.: $user->id)")
                    ->from('info@parcel.io', 'PARCEL.ONE-Team')
                    ->view('emails.admin', compact('user'));
    }
}
