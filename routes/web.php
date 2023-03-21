<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ServiceController;

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
    //slider start
   Route::get('/sliders',[SliderController::class,'index'])->name('sliders.index');
   Route::get('/sliders/create',[SliderController::class,'create'])->name('sliders.create');
   Route::post('/sliders/store',[SliderController::class,'store'])->name('sliders.store');
   Route::get('/sliders/{id}/edit',[SliderController::class,'edit'])->name('sliders.edit');
   Route::put('/sliders/{id}',[SliderController::class,'update'])->name('sliders.update');
    //slider end





   Route::get('/service/create',[ServiceController::class,'serviceCreate'])->name('service.create');
   Route::post('/service/store',[ServiceController::class,'serviceStore'])->name('service.store');
   Route::get('/service/list',[ServiceController::class,'serviceList'])->name('service.list');
   Route::get('/service/delete/{id}',[ServiceController::class,'serviceDelete'])->name('service.delete');
   Route::get('/service/edit/{id}',[ServiceController::class,'serviceEdit'])->name('service.edit');
   Route::post('/service/update/{id}',[ServiceController::class,'serviceUpdate'])->name('service.update');

   //service section end

 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
