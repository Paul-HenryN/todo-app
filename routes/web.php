<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/', [TaskController::class, 'index']);

Route::get('/add', [TaskController::class, 'create']);

Route::post('/add', [TaskController::class, 'store']);

Route::get('/task/{id}', [TaskController::class, 'show']);

Route::get('/delete/{id}', [TaskController::class, 'destroy']);

Route::get('/edit/{id}', [TaskController::class, 'edit']);

Route::post('/edit/{id}', [TaskController::class, 'update']);

