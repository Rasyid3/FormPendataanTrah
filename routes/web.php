<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrangController;

Route::get('/', function () {
    return view('linktree.index');
});

Route::get('/form/create', [FormController::class, 'create'])->name('form.create');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');

Route::get('/thankyou', function (){
    return view('form.thankyou');
})->name('thankyou');

Route::get('/linktree', function () {
    return view('linktree.index');
})->name('linktree');

Route::get('/venue', function () {
    return view('linktree.venue');
})->name('venue');

Route::get('/rundown', function () {
    return view('linktree.rundown');
})->name('rundown');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/orang', [OrangController::class, 'viewPage']);

