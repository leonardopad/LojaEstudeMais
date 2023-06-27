<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/loja/{id}', 'LojaController@show');

Route::get('/loja', [LojaController::class, 'index']);

Route::post('/loja/create', [LojaController::class, 'store']);

Route::get('/olamundo', function () {
    return 'Hello World';
});
