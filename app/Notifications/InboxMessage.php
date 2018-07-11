<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Http\Request;

class InboxMessage extends Notification
{
    use Queueable;

    protected $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Request $message)
    {
        //
        $this->message = $message;
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
                    ->subject($this->message->name . " sent message via Augmenta!")
                    ->greeting(" ")
                    ->salutation(" ")
                    ->from($this->message->email, $this->message->name)
                    ->line('Name:' . $this->message->name)
                    ->line('Company:' . $this->message->company)
                    ->line('Email:' . $this->message->email)
                    ->line('Phone Number:' . $this->message->phone)
					->line($this->message->message);
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
