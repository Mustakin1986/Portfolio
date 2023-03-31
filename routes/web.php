<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactInfoController;
use App\Http\Controllers\Backend\FoaController;
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
Route::get('/menus/create',[MenuController::class,'create'])->name('menus.create');
Route::get('/menus',[MenuController::class,'index'])->name('menus.index');
Route::post('/menus/store',[MenuController::class,'Store'])->name('menus.store');
Route::get('/menus/delete/{id}',[MenuController::class,'Delete'])->name('menu.delete');
Route::get('/menus/{id}/edit',[MenuController::class,'Edit'])->name('menus.edit');
Route::post('/menus/update/{id}',[MenuController::class,'menuUpdate'])->name('menus.update');

 //Slider Controller
Route::get('/sliders',[SliderController::class,'index'])->name('sliders.index');
Route::get('/sliders/create',[SliderController::class,'create'])->name('sliders.create');
Route::post('/sliders/store',[SliderController::class,'store'])->name('sliders.store');
Route::get('/sliders/{id}/edit',[SliderController::class,'edit'])->name('sliders.edit');
Route::put('/sliders/{id}',[SliderController::class,'update'])->name('sliders.update');
//Service Controller start
Route::get('/service/create',[ServiceController::class,'serviceCreate'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'serviceStore'])->name('service.store');
Route::get('/service/list',[ServiceController::class,'serviceList'])->name('service.list');
Route::get('/service/delete/{id}',[ServiceController::class,'serviceDelete'])->name('service.delete');
Route::get('/service/edit/{id}',[ServiceController::class,'serviceEdit'])->name('service.edit');
Route::post('/service/update/{id}',[ServiceController::class,'serviceUpdate'])->name('service.update');
//Service Controller End
//Foa Controller Start
Route::get('faq/create',[FoaController::class,'faqCreate'])->name('faq.create');
Route::post('faq/store',[FoaController::class,'faqStore'])->name('faq.store');
Route::get('faq/list',[FoaController::class,'faqList'])->name('faq.list');
Route::get('faq/delete/{id}',[FoaController::class,'faqdelete'])->name('faq.delete');
Route::get('faq/edit/{id}',[FoaController::class,'faqEdit'])->name('faq.edit');
Route::post('faq/update/{id}',[FoaController::class,'faqUpdate'])->name('faq.update');
//Foa Controller End
 });
 
//CONTACT FORM START
Route::post('contactForm/create',[ContactformController::class,'contactFormCreate'])->name('contactForm.create');
Route::get('contact/list',[ContactformController::class,'contactList'])->name('contact.list');

//CONTACT FORM END

//Client Logo Start
Route::get('client/logo/create',[ClientController::class,'clientLogoCreate'])->name('client.logo.create');
Route::post('client/logo/store',[ClientController::class,'clientLogoStore'])->name('client.logo.store');
Route::get('client/logo/list',[ClientController::class,'clientLogoList'])->name('client.logo.list');
Route::get('client/logo/delete/{id}',[ClientController::class,'clientLogoDelete'])->name('client.logo.delete');
Route::get('client/logo/edit/{id}',[ClientController::class,'clientLogoEdit'])->name('client.logo.edit');
Route::post('client/logo/update/{id}',[ClientController::class,'clientLogoUpdate'])->name('client.logo.update');
//Client Logo End

//Contact Info Start
Route::get('contact/info/create',[ContactInfoController::class,'contactInfoCreate'])->name('contact.info.create');
Route::post('contact/info/store',[ContactInfoController::class,'contactInfoStore'])->name('contact.info.store');
Route::get('contact/info/list',[ContactInfoController::class,'contactInfoList'])->name('contact.info.list');
Route::get('contact/info/delete/{id}',[ContactInfoController::class,'contactInfoDelete'])->name('contact.info.delete');
Route::get('contact/info/edit/{id}',[ContactInfoController::class,'contactInfoEdit'])->name('contact.info.edit');
Route::post('contact/info/update/{id}',[ContactInfoController::class,'contactInfoUpdate'])->name('contact.info.update');
//Contact Info Info





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
