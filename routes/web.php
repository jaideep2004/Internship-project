<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NotesController::class, 'index']) -> name('index');
Route::post('/', [NotesController::class, 'store']) -> name('store');
Route::delete('/{notes:id}', [NotesController::class,'destroy']) -> name('destroy');
Route::get('/notes/{id}/edit', [NotesController::class,'edit'])->name('edit');
Route::put('/notes/{id}', [NotesController::class,'update'])->name('update');

