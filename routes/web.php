<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/', [MyController::class, 'index']);
Route::get('/catalog', [MyController::class, 'catalog']);
Route::get('/nft/{id}', [MyController::class, 'nft']);

Route::get('/lab4', function () {
    return view('lab4');
});