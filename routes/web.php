<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;

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

Route::get('/matchfinder', [MatchController::class, 'matchfinder']);
Route::post('/matchfinder', [MatchController::class, 'getmatch'])->name('getmatch');

Route::get('/playerfinder', [PlayerController::class, 'playerfinder'])->name('getplayer');
Route::post('/playerfinder', [PlayerController::class, 'getplayer'])->name('getplayer');