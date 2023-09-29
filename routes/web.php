<?php

use App\Http\Controllers\SendMessageBotTelegramController;
use App\Http\Controllers\SendPhotoBotTelegramController;
use App\Http\Controllers\StoreMessageBotTelegramController;
use App\Http\Controllers\StorePhotoBotTelegramController;
use App\Http\Controllers\UpdateActivityBotTelegramController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', SendMessageBotTelegramController::class);
Route::post('/send-message', StoreMessageBotTelegramController::class);
Route::get('/send-photo', SendPhotoBotTelegramController::class);
Route::post('/store-photo', StorePhotoBotTelegramController::class);
Route::get('/updated-activity', UpdateActivityBotTelegramController::class);
