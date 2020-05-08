<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MyNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->line('<h2>Danke, dass Sie sich bei parcel.one<br>angemeldet haben!<h2>')
            ->line('<p>Wir freuen uns, Sie bei uns begrüßen zu dürfen.</p>')
            ->line('<p>Bevor Sie loslegen können, klicken Sie bitte auf den untenstehenden Link um Ihre<br>E-Mail-Adresse zu bestätigen.</p>')
            ->action('Verify Email Address', $verificationUrl )
            ->line('<p>Wir wünschen Ihnen viel Erfolg.</p>')
            ->line('<p>Mit freundlichen Grüßen,<p>')
            ->line('<p>Ihr parcel.one-Team</p>');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
