<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
Route::post('/create/store', [JobsController::class, 'store'])->name('store');
Route::get('/admin_all/{slug}', [JobsController::class, 'admin_show_all'])->name('select');
Route::delete('/delete/{id}', [JobsController::class, 'destroy'])->name('delete');
Route::get('/job/{id}/edit', [JobsController::class, 'edit'])->name('edit');
Route::put('/job_update/{id}', [JobsController::class, 'update'])->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
