<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\UserSubscriptionEndMail;

class SubscriptionEndJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $user,$package;
    public function __construct($user,$package)
    {
        $this->user = $user;
        $this->package = $package;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        \Mail::to($this->user->email)->send(new UserSubscriptionEndMail($this->user,$this->package));
    }
}
