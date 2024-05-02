<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserSubscriptionEndMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user,$package;

    /**
     * Create a new message instance.
     */
    public function __construct($user,$package)
    {
        $this->user = $user;
        $this->package = $package;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Subscription End Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        $user = $this->user;
        $package = $this->package;
        return $this->view('email.userendmail')
                    ->with('user', $user)
                    ->with('package', $package)
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
