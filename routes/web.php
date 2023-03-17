<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;

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
Route::get('/',[FrontendController::class,'index']);

Route::group(['middleware'=>'auth', 'prefix'=>'dashboard'], function (){
     Route::get('/', [BackendController::class, 'index'])->name('back.index');
     Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
     Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
     Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
     Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
     Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
     Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
 });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
