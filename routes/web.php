<?php

use App\Http\Controllers\Backend\Property\PropertyController;
use App\Http\Controllers\frontend\PropertyShowController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\ProfileController;
use App\Models\Property;
use App\Models\User;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $properties = Property::query()->with('images')->orderBy('created_at', 'desc')->limit(3)->get();
    return view('welcome', compact('properties'));
});


Route::get('/property/frontend/{slug}/{property}/{notify}', [PropertyShowController::class, 'shows'])->name('frontend.property.show')->middleware('auth');
Route::post('/property/frontend/contact/{property}', [PropertyShowController::class, 'contact'])->name('frontend.property.contact');
Route::get('/property/frontend/index', [PropertyShowController::class, 'index'])->name('fronend.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::resource('/property', PropertyController::class)->except('show');
    Route::get('/logement', [LogementController::class, 'index'])->name('logement.index');
    Route::get('/louer/{property}/', [LogementController::class, 'louer'])->name('louer.index');
});

Route::get('/tester', function () {
    $notification=DatabaseNotification::query()->findOrFail('d471b655-de4c-4655-bfdf-555eaeb91ace');
    $user=User::query()->findOrFail($notification->data['client']['id']);
   dd($user);
});

require __DIR__ . '/auth.php';
