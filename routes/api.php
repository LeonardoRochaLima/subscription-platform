<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::apiResource('posts', 'api\PostController');
//Route::apiResource('subscribers', 'api\SubscriberController');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
