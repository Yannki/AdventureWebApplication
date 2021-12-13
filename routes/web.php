<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdventurerController;

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
    return view('welcome')->name('welcome');
});

Route::get('/adventurers', [AdventurerController::class, 'index']);

Route::get('users/{name}', function ($name) {
    return "Test for developer: $name";
});

Route::group(['middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


require __DIR__.'/auth.php';
