<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SubscriberController;

Route::apiResource('subscribers', SubscriberController::class);

Route::post('subscribers/send-emails',[SubscriberController::class, 'sendMails']);