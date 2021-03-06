<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'referrals'], function () {
    Route::get('/', [ReferralController::class, 'index'])->name('referrals');
    Route::get('/create', [ReferralController::class, 'create'])->name('referrals.create');
    Route::post('/', [ReferralController::class, 'store']);
});

Route::group(['prefix' => 'subscriptions'], function () {
    Route::get('/', [SubscriptionController::class, 'create'])->name('subscriptions');
    Route::post('/', [SubscriptionController::class, 'store']);
});
