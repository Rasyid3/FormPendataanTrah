<?php

use App\Http\Controllers\Api\GrandparentController;
use App\Http\Controllers\Api\PeopleController;
use App\Http\Controllers\OrangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('grandparents', GrandparentController::class);
Route::apiResource('people', PeopleController::class);
Route::apiResource('orang', OrangController::class);
