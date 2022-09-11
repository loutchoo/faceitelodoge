<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/matchfinder', [MainController::class, 'matchfinder']);
Route::post('/matchfinder', [MainController::class, 'getmatch'])->name('getmatch');

Route::get('/playerfinder', [MainController::class, 'playerfinder']);
Route::post('/playerfinder', [MainController::class, 'getplayer'])->name('getplayer');