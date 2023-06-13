<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobQueueEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $user;
    protected $emailTemplate;

    public function __construct($user, $emailTemplate)
    {
        $this->user = $user;
        $this->emailTemplate = $emailTemplate;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Job Queue Email',
        );
    }


    public function build()
    {
        return $this->subject('Your Email Subject')
                     ->from('danishmunchi@gmail.com', 'Dani')
                     ->content()
                     ->with([
                         'user' => $this->user,
                         'emailTemplate' => $this->emailTemplate,
                     ]);
            
    }

   
                

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.statictemplate',
        );
    }

    // public function content()
    // {
    //     return $this->view('email.statictemplate')
    //                 ->with([
    //                     'user' => $this->user,
    //                     'emailTemplate' => $this->emailTemplate,
    //                 ]);
    // }

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
