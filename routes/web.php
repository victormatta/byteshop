<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\RegisterPageController;

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

Route::get('/', [LoginPageController::class, 'index']);

Route::get('/register', [RegisterPageController::class, 'index'])->name('static.registerPage');
