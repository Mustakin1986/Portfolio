<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\SliderController;
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

     //MenuBar
     Route::get('/menus/create',[MenuController::class,'create'])->name('menus.create');

     Route::get('/menus',[MenuController::class,'index'])->name('menus.index');
     Route::delete('/menus/{id}',[MenuController::class,'destroy'])->name('menus.destroy');



     Route::post('/menus/store',[MenuController::class,'Store'])->name('menus.store');

     Route::get('/sliders',[SliderController::class,'index'])->name('sliders.index');
     Route::get('/sliders/create',[SliderController::class,'create'])->name('sliders.create');
     Route::post('/sliders/store',[SliderController::class,'store'])->name('sliders.store');
     Route::get('/sliders/{id}/edit',[SliderController::class,'edit'])->name('sliders.edit');
     Route::put('/sliders/{id}',[SliderController::class,'update'])->name('sliders.update');



    
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
