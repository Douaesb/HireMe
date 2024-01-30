<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ServiceController;

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

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create',[ServiceController::class , 'create'])->name('service.create');
Route::post('/service',[ServiceController::class , 'store'])->name('service.store');
// Route::get('/service/{service}/edit',[ServiceController::class , 'edit'])->name('service.edit');
// Route::put('/service/{service}/update',[ServiceController::class , 'update'])->name('service.update');
// Route::delete('/service/{service}/delete',[ServiceController::class , 'delete'])->name('service.delete');




