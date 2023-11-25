<?php

use App\Http\Controllers\AboutController;
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
// Start of AboutController //
Route::post('/about/update/{about}', [AboutController::class,'update'])->name('about.update');
Route::get('/about/update/{about}', [AboutController::class,'edit'])->name('about.edit');
Route::resource('about', AboutController::class)->except('update');
// End of AboutController //
