<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
Route::get('/form', [App\Http\Controllers\FormController::class, 'create'])->name('form');
Route::post('/proses', [App\Http\Controllers\FormController::class, 'proses']);

Route::get('/', [App\Http\Controllers\LoketController::class, 'index'])->name('loket');



Route::get('/user', [UserController::class, 'index']);

Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'create']);
Route::post('/feedbackproses', [App\Http\Controllers\FeedbackController::class, 'proses']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crudloket', [App\Http\Controllers\CrudController::class, 'index'])->name('crud');
Route::get('/admin/create', [App\Http\Controllers\CrudController::class, 'create'])->name('create');
Route::get('/admin/store', [App\Http\Controllers\CrudController::class, 'store'])->name('store');

