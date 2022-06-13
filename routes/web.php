<?php

use App\Http\Controllers\PaslaugosController;
use App\Http\Controllers\LaikasController;
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

//Paslaugos
Route::get('/paslaugos', [PaslaugosController::class, 'index']);
Route::get('/paslaugos/add', [PaslaugosController::class, 'addServices']);
Route::post('/paslaugos/add', [PaslaugosController::class, 'store']);
Route::get('/paslaugos/edit/{id}', [PaslaugosController::class, 'editServices']);
Route::Post('/paslaugos/edit/{id}', [PaslaugosController::class, 'edit']);
Route::get('/paslaugos/delete/ask/{id}', [PaslaugosController::class, 'askDelete']);
Route::get('/paslaugos/delete/{id}', [PaslaugosController::class, 'delete']);
Route::get('paslaugos/search', [PaslaugosController::class, 'search']);
//Laikas
Route::get('/laikas', [LaikasController::class, 'index']);
Route::get('/laikas/add', [LaikasController::class, 'addServices']);
Route::post('/laikas/add', [LaikasController::class, 'store']);
Route::get('/laikas/edit/{id}', [LaikasController::class, 'editServices']);
Route::Post('/laikas/edit/{id}', [LaikasController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/apie', function () {
    return view('apie');
});

Route::get('/pradinis', function () {
    return view('pradinis');
});
