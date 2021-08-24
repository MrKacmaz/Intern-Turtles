<?php

use App\Http\Controllers\DialogController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnValue;

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

Route::get('/dashboard', [UserController::class, 'selectCharacter'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



Route::get('/startTutorial', [DialogController::class, 'index'])->middleware(['auth']);

// Register select the own character
Route::post('/characterSelected/{id}', [UserController::class, 'update']);

// Base
Route::get('/base', [MapController::class, 'mapSelected'])->middleware(['auth'])->name('base');
Route::get('/base/{level}', [MapController::class, 'mapSelected'])->middleware(['auth'])->name('base');

// Maps
Route::get('/maps', [MapController::class, 'allmap'])->middleware(['auth'])->name('maps');

// Dark Forest
Route::get('/forest', [MapController::class, 'forest'])->middleware(['auth'])->name('forest');

// Credits
Route::get('/credits', [UserController::class, 'credit'])->middleware(['auth'])->name('credit');
