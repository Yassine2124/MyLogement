<?php

namespace App\Listeners;

use App\Events\PropertyContactEvent;
use App\Mail\PropertyContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;

class PropertyContactListener
{
    /**
     * Create the event listener.
     */
    public function __construct(public Mailer $mailer)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PropertyContactEvent $event): void
    {
        $this->mailer->send(new PropertyContactMail($event->property,$event->data));
    }
}
