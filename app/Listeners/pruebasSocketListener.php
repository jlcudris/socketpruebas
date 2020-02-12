<?php

namespace App\Listeners;

use App\Events\pruebasSocket;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class pruebasSocketListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  pruebasSocket  $event
     * @return void
     */
    public function handle(pruebasSocket $event)
    {
        //  $id=$event->datos[0]['primary_key'];
        //     return response()->json([$id=>$event->datos,'prueba'=>$id]);
    }
}
