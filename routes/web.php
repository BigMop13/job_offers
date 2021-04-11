<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
\*/

Route::get('/', [JobsController::class, 'index'])->name('welcome');
Route::get('/job/related/{slug}', [JobsController::class,'show_related'])->name('related');
Route::get('/job/{id}', [JobsController::class, 'show_single'])->name('single');
Route::get('/create', [JobsController::class, 'create'])->name('create');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
