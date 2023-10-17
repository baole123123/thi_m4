<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoryController::class, 'index'])->name('categorie.index');
Route::get('/categorie/create', [CategoryController::class, 'create'])->name('categorie.create');

Route::get('/categorie/edit/{id}' , [CategoryController::class , 'edit'])->name('categorie.edit');

Route::post('/categorie/store' , [CategoryController::class , 'store'])->name('categories.store');

Route::put('/categorie/{id}', [CategoryController::class , 'update'])->name('categorie.update');

Route::delete('/categorie/{id}', [CategoryController::class , 'destroy'])->name('categories.destroy');

Route::get('/categorie/{categorie}', [CategoryController::class , 'show'])->name('categorie.show');

