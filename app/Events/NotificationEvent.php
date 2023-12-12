<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->data = $data;
    }

    public function broadcastOn()
    {
        return new Channel('test');
    }
    public function broadcastAs()
    {
        return 'notification-send';
    }
    public function broadcastWith()
    {

        return [
            'data' => $this->data,
        ];
    }

}
