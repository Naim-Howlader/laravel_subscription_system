<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function package(){
        $currentUser = auth()->user();
        $userDetails = User::with('packages')->findOrFail($currentUser->id);
        return view('package', compact('userDetails','currentUser'));
    }
}
