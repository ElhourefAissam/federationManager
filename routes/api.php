<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getRoles', 'Api\AdminController@getRoles');
Route::post('/assignRole', 'Api\AdminController@assignRole');

Route::get('/handicap/{q?}', 'Api\HandicapController@index');
Route::get('/Office/{q?}', 'Api\OfficeController@index');
Route::get('/Employe/{q?}', 'Api\EmployeController@index');
  
Route::resource('Handicap', 'Api\HandicapController');
Route::resource('Office', 'Api\OfficeController');
Route::resource('Employe', 'Api\EmployeController');
Route::resource('Student', 'Api\StudentController');
Route::resource('handicap', 'Api\HandicapController');
// Route::post('/handicap', 'Api\HandicapController@store');