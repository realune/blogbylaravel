<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;

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

// Show blog list
Route::get('/', [BlogController::class, 'showList'])->name('blogs');

// Show blog create
Route::get('/blog/create', [BlogController::class, 'showCreate'])->name('create');

// Post blog
Route::post('/blog/store', [BlogController::class, 'exeStore'])->name('store');

// Show blog detail
Route::get('/blog/{id}', [BlogController::class, 'showDetail'])->name('show');

// Show blog edit
Route::get('/blog/edit/{id}', [BlogController::class, 'showEdit'])->name('edit');

// Update blog
Route::post('/blog/update', [BlogController::class, 'exeUpdate'])->name('update');

// Delete blog
Route::post('/blog/delete', [BlogController::class, 'exeDelete'])->name('delete');
