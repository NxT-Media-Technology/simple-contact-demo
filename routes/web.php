<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('add',[ContactController::class, 'add']);
Route::post('add',[ContactController::class, 'store']);
Route::get('edit/{id}',[ContactController::class, 'edit']);
Route::post('edit/{id}',[ContactController::class, 'update'])->name('contact.save');
Route::get('delete/{id}',[ContactController::class, 'delete']);
