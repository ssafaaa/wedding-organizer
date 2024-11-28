<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendQuestionMail extends Mailable
{
    public $messageContent; // Variabel publik untuk digunakan di template email

    public function __construct($messageContent)
    {
        $this->messageContent = $messageContent; // Inisialisasi variabel
    }

    public function build()
    {
        return $this->subject('Send Question Mail')
                    ->view('emails.question') // Nama view email
                    ->with([
                        'messageContent' => $this->messageContent // Kirim variabel ke view
                    ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Question Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'user.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
