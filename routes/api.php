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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * To do list API
 */
Route::prefix('/todos')->group(function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'index'])->name('todos.index');
    Route::get('/{id}', [\App\Http\Controllers\TaskController::class, 'getOneTask']);
    Route::post('/create', [\App\Http\Controllers\TaskController::class, 'createNewTask']);
    Route::put('/update/{id}', [\App\Http\Controllers\TaskController::class, 'updateTask']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\TaskController::class, 'deleteTask']);
});

