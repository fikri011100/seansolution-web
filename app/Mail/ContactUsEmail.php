<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject;

    public function __construct($data, $subject)
    {
        $this->data = $data;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.contact_us');
    }
}
