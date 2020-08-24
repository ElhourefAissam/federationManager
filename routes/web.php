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

Route::resource('Home','homeController')->only('index');


Route::resource('Offices', 'OfficeController');
Route::resource('Handicap', 'HandicapController');
Route::resource('Contract', 'ContractController');
Route::resource('Employee', 'EmployeeController');
Route::resource('Material', 'MaterialController');
Route::resource('Parent', 'ParentController');
Route::resource('Student', 'StudentController');
Route::resource('Vehicle', 'VehicleController');


Auth::routes();

Route::get('/', 'HomeController@index');

