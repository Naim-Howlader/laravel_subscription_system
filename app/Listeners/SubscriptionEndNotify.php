<?php

namespace App\Listeners;

use App\Events\SubscriptionEnd;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\SubscriptionEndJob;

class SubscriptionEndNotify
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
    public function handle(SubscriptionEnd $event): void
    {
        $user = $event->user;
        $package = $event->package;
        $subscriptionEndJob = new SubscriptionEndJob($user,$package);
        dispatch($subscriptionEndJob);
    }
}
