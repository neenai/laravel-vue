<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('category', CategoryController::class)->only(['index','store','show','update','destroy']);
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
// Route::apiResource('todos', TodoController::class);
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');       // Fetch all todo
Route::post('/todo', [TodoController::class, 'store']);      // Create a new todo
Route::get('/todo/{todo}', [TodoController::class, 'show']); // Fetch a single todo
Route::patch('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update'); // Update a todo
Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy'); // Delete a todo