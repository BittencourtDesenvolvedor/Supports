<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\{SupportController};
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
Route::get('/supports', [SupportController::class, 'index'])->name('support.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/supports/store', [SupportController::class, 'store'])->name('support.store');
Route::get('/supports/show/{id}', [SupportController::class, 'show'])->name('support.show');
Route::get('/supports/edit/{id}', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/supports/update/{id}', [SupportController::class, 'update'])->name('support.update');
Route::delete('/supports/destroy/{id}', [SupportController::class, 'destroy'])->name('support.destroy');

Route::get('/', function () {
    return view('welcome');
});
