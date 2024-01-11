<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
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

// Get game data with Axios
Route::get('/getjuego1',[JuegoController::class,'getInfoJuego1'])->name('getJuego1');
Route::get('/getjuego4',[JuegoController::class,'getInfoJuego4'])->name('getJuego4');
