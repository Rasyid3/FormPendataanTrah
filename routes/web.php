<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
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



