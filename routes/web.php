<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class,'home'])->name('home');
Route::get('/feature', [WebsiteController::class,'feature'])->name('feature');
Route::get('/pricing', [WebsiteController::class,'pricing'])->name('pricing');
Route::get('/about', [WebsiteController::class,'about'])->name('about');
