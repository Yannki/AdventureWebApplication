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
    return view('adventurer');
});

Route::get('/adventurers', [AdventurerController::class, 'index']);

Route::get('users/{name}', function ($name) {
    return "Test for developer: $name";
});
Route::get('/blog', function () {
    return "blog";
});

Route::redirect('/hello', '/welcome');
// Route::redirect('/', '/welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
