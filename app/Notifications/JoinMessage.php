<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class JoinMessage extends Notification
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
        $uploadPaths = $this->uploadAndGetPath();
        return (new MailMessage)
                    ->subject($this->message->name . " sent message via Augmenta!")
                    ->greeting(" ")
                    ->salutation(" ")
                    ->from($this->message->email, $this->message->name)
                    ->line('Name:' . $this->message->name)
                    ->line('SureName:' . $this->message->surname)
                    ->line('Email:' . $this->message->email)
                    ->attach($uploadPaths[0]);
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

    protected function uploadAndGetPath()
    {
        $uploadPaths = array();
        if ($files = $this->message->file('files')) {
            dd('sdf');
            foreach ($files as $file) {
                $path = Storage::disk('uploads')->putFile('jointeam', $file);
                $fullPath = Storage::disk('uploads')->getAdapter()->applyPathPrefix($path);
                list($host, $uploadPath) = explode('\public\\', $fullPath);
                array_push($uploadPaths, $uploadPath);
            }
        }
        return $uploadPaths;
    }
}
