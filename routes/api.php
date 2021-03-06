<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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

Route::get('/commissions/{id}/comments', 
    [CommentController::class, 'apiIndex'])->name('api.comments.index');

Route::post('/commissions/{id}/comments', 
    [CommentController::class, 'apiStore'])->name('api.comments.store');

Route::post('/commissions/{id}/comments/edit', 
    [CommentController::class, 'apiEdit'])->name('api.comments.edit');

Route::post('/commissions/{id}/comments/delete', 
    [CommentController::class, 'apiDestroy'])->name('api.comments.destroy');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
