<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('show', ['title' => 'Hello World!']);
});
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\IngredientController;

// Один-ко-многим (Category ↔ Dish)
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/dishes', [DishController::class, 'index']);
Route::get('/dishes/{id}', [DishController::class, 'show']);

// Многие-ко-многим (Dish ↔ Ingredient)
Route::get('/ingredients/{id}', [IngredientController::class, 'show']);
