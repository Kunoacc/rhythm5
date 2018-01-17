<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class successfulDonation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param $donation
     */
    public function __construct($donation)
    {
        $this->donation = $donation;
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
        return (new MailMessage)
                    ->greeting('Thank You!')
                    ->line('We want to take the time out to support the growth of the fellowship ' . $this->donation->name)
                    ->line('Remain Blessed.')
                    ->action('Visit Website', url('/'))
                    ->line('Thank you for your donation.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
