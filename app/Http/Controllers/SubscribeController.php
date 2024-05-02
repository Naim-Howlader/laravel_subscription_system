<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Subscribed;
use App\Models\Feature;
use App\Models\Package;
use App\Models\User;

class SubscribeController extends Controller
{
    public function subscribe(Request $request){
        $user = auth()->user();
        if($user){
            if($user->package_status == 0){
                $currentUser = User::findOrFail($user->id);
                $currentUser->update([
                    'package_status' => 1,
                    'package_id' => $request->package_id,
                    'starting_date' => date('d/m/Y'),
                    'ending_date' => date('d/m/Y',strtotime('+1 month')),
                ]);
                $subscribed = new Subscribed($user);
                event($subscribed);
                return redirect()->route('home')->with('success', 'Subscription Successfull');
            }else{
                return redirect()->route('home')->with('error', 'You have already subscribed a package');
            }
        }else{
            return redirect()->route('home')->with('error','Login your account to subscribe this package');
        }
    }
}
