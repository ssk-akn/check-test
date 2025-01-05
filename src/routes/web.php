<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'edit']);
Route::get('/edit', [ContactController::class, 'showEditForm'])->name('showEditForm');
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);

Route::get('/register', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/admin', [UserController::class, 'admin']);
Route::get('/admin/search', [UserController::class, 'search']);