<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatternController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleton', [PatternController::class, 'showSingleton']);
Route::get('/factory', [PatternController::class, 'showFactory']);
Route::get('/facade', [PatternController::class, 'showFacade']);
Route::get('/iterator', [PatternController::class, 'showIterator']);
Route::get('/observer', [PatternController::class, 'showObserver']);
Route::get('/strategy', [PatternController::class, 'showStrategy']);
Route::get('/template', [PatternController::class, 'showTemplate']);
Route::get('/command', [PatternController::class, 'showCommand']);
Route::get('/composite', [PatternController::class, 'showComposite']);
Route::get('/chain', [PatternController::class, 'showChain']);
Route::get('/state', [PatternController::class, 'showState']);