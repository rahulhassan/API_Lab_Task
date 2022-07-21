<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news', [newsController::class, 'newsInfo']);
Route::get('/news/{type}', [newsController::class, 'newsByType']);

Route::post('/news/add', [newsController::class, 'newsInsert']);

Route::post('/news/update/{id}', [newsController::class, 'newsUpdate']);

Route::post('/news/delete/{id}', [newsController::class, 'newsDelete']);