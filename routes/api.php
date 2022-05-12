<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticController;

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

Route::post('send-fb-click', [StatisticController::class, 'sendFbClick']);
Route::get('testing', [StatisticController::class, 'testing']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
