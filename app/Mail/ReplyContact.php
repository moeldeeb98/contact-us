<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $message;
    protected $reply;
    protected $name;
    protected $email;

    public function __construct($message, $reply, $email, $name)
    {
        $this->message = $message;
        $this->reply = $reply;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contactMessage = $this->message;
        $reply = $this->reply;
        $adminName = $this->name;
        $adminEmail = $this->email;
        return $this->to($contactMessage->email)->subject('Contact-us Support Reply')->from($adminEmail)
            ->view('backend.mails.reply-message', compact('contactMessage', 'reply', 'adminName'));
    }
}
