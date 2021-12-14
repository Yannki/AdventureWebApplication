<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdventurerController;
use App\Http\Controllers\TavernController;

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
    Route::post('/taverns', [TavernController::class, 'store']);
    Route::get('/taverns/create', [TavernController::class, 'create']);
    Route::get('/taverns/{id}', [TavernController::class, 'show']);
    
    Route::get('/adventurers', [AdventurerController::class, 'index'])->name('adventurers');
    Route::get('/adventurers/{id}', [AdventurerController::class, 'show']);
});


require __DIR__.'/auth.php';
