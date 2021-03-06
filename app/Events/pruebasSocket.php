<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class pruebasSocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $datos;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($datos)
    {
        $this->datos =$datos;
    }



    public function broadcastWith()
    {

    return $this->datos;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */

    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return new Channel('home');
    }
}
