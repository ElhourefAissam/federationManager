<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/handicap/{q?}', 'Api\HandicapController@index');
Route::resource('handicap', 'Api\HandicapController');
// Route::post('/handicap', 'Api\HandicapController@store');