<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/cars',[
    'uses'=>'App\Http\Controllers\CarController@index',
    'as'=>'cars.index'    
]);

//get dasboard


Route::get('/',[
    'uses'=>'App\Http\Controllers\DashboardController@index',
    'as'=>'dashboard.index'    
]);

Route::get('/cars/create',[
    'uses'=>'App\Http\Controllers\CarController@create',
    'as'=>'cars.create'
]);

Route::post('/cars',[
    'uses'=>'App\Http\Controllers\CarController@store',
    'as'=>'cars.store'
]);

Route::get('/cars/{car}/edit',[
    'uses'=>'App\Http\Controllers\CarController@edit',
    'as'=>'cars.edit'    
]);

Route::post('/cars/{car}',[
    'uses'=>'App\Http\Controllers\CarController@update',
    'as'=>'cars.update'
]);

Route::delete('/cars/{car}',[
    'uses'=>'App\Http\Controllers\CarController@destroy',
    'as'=>'cars.delete'
]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Auth::routes();

