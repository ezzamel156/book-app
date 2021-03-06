<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('book');
});

Route::get('/dashboard', function () {
    return redirect()->route('book');
})->name('dashboard');


Route::get('/book', [BookController::class, 'index'])->name('book');
Route::post('/book', [BookController::class, 'store']);


//require __DIR__.'/auth.php';
