<?php

use App\Http\Controllers\PaslaugosController;
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
    return view('welcome');
});

//MANO
Route::get('/paslaugos', [PaslaugosController::class, 'index']);
Route::get('/paslaugos/add', [PaslaugosController::class, 'addServices']);
Route::post('/paslaugos/add', [PaslaugosController::class, 'store']);
Route::get('/paslaugos/edit/{id}', [PaslaugosController::class, 'editServices']);
Route::Post('/paslaugos/edit/{id}', [PaslaugosController::class, 'edit']);
Route::get('/paslaugos/delete/ask/{id}', [PaslaugosController::class, 'askDelete']);
Route::get('/paslaugos/delete/{id}', [PaslaugosController::class, 'delete']);
Route::get('paslaugos/search', [PaslaugosController::class, 'search']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
