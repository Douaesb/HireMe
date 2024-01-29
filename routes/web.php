<?php

use App\Http\Controllers\CategorieController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');

Route::get('/categorie/create',[CategorieController::class , 'create'])->name('categorie.create');
Route::post('/categorie',[CategorieController::class , 'store'])->name('categorie.store');
Route::get('/categorie/{categorie}/edit',[CategorieController::class , 'edit'])->name('categorie.edit');
Route::put('/categorie/{categorie}/update',[CategorieController::class , 'update'])->name('categorie.update');
Route::delete('/categorie/{categorie}/delete',[CategorieController::class , 'delete'])->name('categorie.delete');




