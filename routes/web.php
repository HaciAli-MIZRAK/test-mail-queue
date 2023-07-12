<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function(){

    $details['email'] = 'info@veritakip.net';
    $delay = \Carbon\Carbon::now()->addMinutes(10);
    dispatch(new \App\Jobs\QueueEmailJob($details))->delay($delay);

    dd('done delay 10 Minutes');
});
