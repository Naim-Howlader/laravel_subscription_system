<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageFeatureController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('home');
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'isUser'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'isAdmin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth','isAdmin'], 'prefix'=>'admin/','as'=>'admin.'],function(){
    Route::resource('features', PackageFeatureController::class);
    Route::resource('packages', PackageController::class);
});
