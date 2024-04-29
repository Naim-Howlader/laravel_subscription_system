<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserSubscribeMail extends Mailable
{
    public $event;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Subscribe Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        $event = $this->event;
        return $this->view('email.usermail')
                    ->with('event', $event)
                    ->subject('Subscription Successfull');
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
