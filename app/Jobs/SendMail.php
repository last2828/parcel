<?php

namespace App\Jobs;

use App\Admin;
use App\FormMailer;
use App\Interfaces\IMailer;
use App\Mail\UserMail;
use App\Notifications\UserNotification;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(IMailer $mailer)
    {
        $mailer->sendEmailFormToAdmin($this->user);
        $mailer->sendEmailFormToUser($this->user);
    }
}
