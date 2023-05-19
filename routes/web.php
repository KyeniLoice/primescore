<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('clients')->group(function(){
    Route::get('/',[ClientController::class,'index'])->name('clients.index');
    Route::get('/add',[ClientController::class,'create'])->name('clients.create');
    Route::post('/add',[ClientController::class,'store'])->name('clients.store');
    Route::get('/{id}/edit',[ClientController::class,'edit'])->name('clients.edit');
    Route::put('/{id}',[ClientController::class,'update'])->name('clients.update');
    Route::delete('/{id}',[ClientController::class,'destroy'])->name('clients.destroy');
});

require __DIR__.'/auth.php';
