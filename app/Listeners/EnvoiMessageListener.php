<?php

namespace App\Listeners;

use App\Events\EnvoiMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EnvoiMessageListener 
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
     * @param  \App\Events\EnvoiMessageEvent  $event
     * @return void
     */
    public function handle(EnvoiMessageEvent $event)
    {
        #dd($event->objet, $event->message, $event->id);
    }
}
