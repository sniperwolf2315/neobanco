<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::middleware('auth:api')->group(function () {
    Route::post('accounts', 'AccountController@create');
    Route::get('accounts/{id}', 'AccountController@show');
    Route::get('transactions/{user_id}', 'TransactionController@index');
    Route::post('transactions/deposit', 'TransactionController@deposit');
    Route::post('transactions/withdrawal', 'TransactionController@withdrawal');
});
