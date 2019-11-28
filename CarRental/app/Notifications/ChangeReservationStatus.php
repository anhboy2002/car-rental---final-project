<?php

namespace App\Notifications;

use App\Models\Checkout;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class ChangeReservationStatus extends Notification implements ShouldQueue
{
    use Queueable;

    protected $transaction;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Checkout $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
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
            'id' => $this->id,
            'user_name_1' => $this->transaction->user1->user_name,
            'user_name_2' => $this->transaction->user2->user_name,
            'avatar_car' => $this->transaction->car->photos[0]->feature,
            'car_name' => $this->transaction->car->name,
            'message_1' => $this->transaction->message_1,
            'message_2' => $this->transaction->message_2,
            'status_ck' =>  $this->transaction->status_ck,
            'transaction_id' => $this->transaction->id,
        ];
    }
}
