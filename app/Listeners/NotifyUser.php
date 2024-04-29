<?php

namespace App\Listeners;

use App\Events\Subscribed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Jobs\SubscribedJob;

class NotifyUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Subscribed $event): void
    {
        $userMailJob = new SubscribedJob($event);
        dispatch($userMailJob);

    }
}
