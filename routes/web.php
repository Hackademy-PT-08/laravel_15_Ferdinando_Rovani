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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index' ])->name('Home');

Route::get('/contact_us', [ContactController::class, 'index' ])->name('FormContact');
Route::get('/messaggio/inviato', [ContactController::class, 'show' ])->name('SuccessEmail');
Route::post('/contact_us', [ContactController::class, 'contact' ])->name('FormContact');
