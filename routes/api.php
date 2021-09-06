<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/* Question API Start */
Route::get('/get_question/{id}','DemoController@get_question');
Route::post('/put_result','DemoController@put_result');

/* Question API End */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
