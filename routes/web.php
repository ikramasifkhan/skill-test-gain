<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', \App\Http\Controllers\SubscriberController::class, [
    'names'=> ['index'=>'subscriber.index', 'create'=>'subscriber.create', 'store'=>'subscriber.store',]
]);
Route::resource('segments', \App\Http\Controllers\SegmentController::class);
Route::resource('/rules', \App\Http\Controllers\RuleController::class);
