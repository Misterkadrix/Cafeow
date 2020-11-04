<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilController;

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

Route::get('/', [profilController::class,"index"])->name("1dex");
Route::get('/about', [profilController::class,"about"])->name("Abut");
Route::get('/products', [profilController::class,"products"])->name("pro");
Route::get('/store', [profilController::class,"store"])->name("store");

