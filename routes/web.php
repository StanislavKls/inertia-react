<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/admin/users-list', [UsersController::class, 'index'])->name('users.list');

Route::inertia('/login', 'views/Login')->name('login');
Route::inertia('/signup', 'views/Signup');
