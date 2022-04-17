<?php

use App\Http\Controllers\API\PetsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    return App\Models\User::all();
});

// Route::group('v1', function(){
    Route::resource('pets', PetsController::class);

// Atualiza dados size
    Route::put('/pets',  PetsController::alterarValoresSize());

    Route::put('/pets',  PetsController::alterarValoresEspecie());
// });
