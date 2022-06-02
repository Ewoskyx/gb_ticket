<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public function toMail($notifiable)
    {
        $url = url(config('app.client_url').'/password/reset/'.$this->token).'?email='.urlencode($notifiable->email);
        return (new MailMessage)
                    ->subject('Şifre Değişikliği Talebi')
                    ->line('Bu E-Posta, tarafınıza, şifre değişikliği talebi üzerine gönderilmiştir!')
                    ->action('Şifre Yenile',  $url)
                    ->line('Şifre değişikliği talebinde bulunmadıysanız işleme devam etmeyiniz!');
    }
}