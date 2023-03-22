<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ServiceController;

use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactformController;

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
     
   //service section end

   //CONTACT FORM START
    Route::post('contactForm/create',[ContactformController::class,'contactFormCreate'])->name('contactForm.create');
    
   Route::get('contact/list',[ContactformController::class,'contactList'])->name('contact.list');

   //CONTACT FORM END

 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
