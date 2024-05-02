<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Events\SubscriptionEnd;
use Illuminate\Support\Facades\Log;

class PackageStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:package-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $date = date('d/m/Y');
        $users = User::with('packages')->get();

        foreach ($users as $user) {
            if($user->packages){
                if ($user->ending_date == $date) {
                    $package = [
                        'title' => $user->packages->title,
                        'price' => $user->packages->price,
                    ];

                    $user->update([
                        'package_status' => 0,
                        'package_id' => null,
                        'starting_date' => null,
                        'ending_date' => null
                    ]);

                    event(new SubscriptionEnd($user, $package));
                }
            }
        }

    }
}
