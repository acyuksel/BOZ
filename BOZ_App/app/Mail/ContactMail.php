<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The contact instance.
     *
     * @var \App\Models\Contact
     */
    protected $contact;

    /**
     * the app logo url
     *
     * @var string
     */
    protected $logoUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        $this->logoUrl = asset('img/Bureau_Onbeperkte_Zaken_Logo-square.png');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("Nieuwe Contact mail van {$this->contact->email}")
            ->markdown('contact.mail',['contact' => $this->contact, "logoUrl" => $this->logoUrl]);
    }
}
