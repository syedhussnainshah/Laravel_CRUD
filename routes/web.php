<?php

use App\Http\Controllers\StudentController;
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


Route::post('/submit', [StudentController::class, 'create'])->name('create');
Route::get('/fetch', [StudentController::class, 'index'])->name('fetch');
Route::get('/', [StudentController::class, 'index'])->name('fetch');
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update/{id}',[StudentController::class, 'update']);
