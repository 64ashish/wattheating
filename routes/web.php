<?php

use App\Http\Controllers\Template\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [HomeController::class, 'categories']);

Route::get('/product', [HomeController::class, 'product']);

Route::get('/om-watt', [HomeController::class, 'about']);

Route::get('/aktuellt', [HomeController::class, 'aktuellt']);

Route::get('/aktuellt/single', [HomeController::class, 'single']);

Route::get('/garanti', [HomeController::class, 'garanti']);

Route::get('/kontakt', [HomeController::class, 'kontakt']);

Route::get('/private', [HomeController::class, 'privateCustomers']);

