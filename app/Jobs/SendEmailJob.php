<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;
use App\Mail\JobQueueEmail;


class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailTemplate;
    /**
     * Create a new job instance.
     */
    public function __construct($emailTemplate)
    {
        $this->emailTemplate = $emailTemplate;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = Email::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new JobQueueEmail($user, $this->emailTemplate));
        }
    }
}
