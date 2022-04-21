<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('login', [ContactController::class, 'login'])->name('login');
Route::get('create', [ContactController::class, 'create'])->name('create');
Route::post('create', [ContactController::class, 'store'])->name('store');
Route::get('contact/{id}', [ContactController::class, 'show'])->name('show');
Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('contact/{id}', [ContactController::class, 'update'])->name('update')->middleware('auth');
Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('trashed', [ContactController::class, 'onlyTrashed'])->name('trashed')->middleware('auth');
Route::post('restore', [ContactController::class, 'restore'])->name('restore')->middleware('auth');

Route::get('authenticate', [ContactController::class, 'authenticate'])->name('authenticate');

