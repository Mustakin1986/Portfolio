<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//admin Route

Route::get('/',[BackendController::class,'index']);

Route::get('/create/navbar',[BackendController::class,'CreateNavbar']);
Route::post('/create/navbar',[BackendController::class,'NavbarCreate']);



Route::group(['middleware'=>'auth', 'prefix'=>'dashboard'], function (){
     Route::get('/', [BackendController::class, 'index'])->name('back.index');
 });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
