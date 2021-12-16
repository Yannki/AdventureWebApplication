<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdventurerController;
use App\Http\Controllers\TavernController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\CommentController;

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

Route::get('users/{name}', function ($name) {
    return "Test for developer: $name";
});

Route::group(['middleware'=>'auth'], function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/taverns', [TavernController::class, 'index'])->name('taverns');
    Route::get('/taverns/create', [TavernController::class, 'create']);
    Route::get('/taverns/{id}', [TavernController::class, 'show']);
    Route::post('/taverns', [TavernController::class, 'store']);
    Route::get('/taverns/{id}/edit', [TavernController::class, 'edit']);
    Route::put('/taverns/{id}', [TavernController::class, 'update']);
    Route::delete('/taverns/{id}', [TavernController::class, 'destroy']);

    Route::get('/commissions', [CommissionController::class, 'index'])->name('commissions');
    Route::get('/commissions/create', [CommissionController::class, 'create']);
    Route::get('/commissions/{id}', [CommissionController::class, 'show']);
    Route::post('/commissions', [CommissionController::class, 'store']);
    Route::get('/commissions/{id}/edit', [CommissionController::class, 'edit']);
    Route::put('/commissions/{id}', [CommissionController::class, 'update']);
    Route::delete('/commissions/{id}', [CommissionController::class, 'destroy']);

    Route::get('/commissions/{id}/comments', [CommentController::class, 'index']);
    
    Route::get('/adventurers', [AdventurerController::class, 'index'])->name('adventurers');
    Route::get('/adventurers/{id}', [AdventurerController::class, 'show']);
});


require __DIR__.'/auth.php';
