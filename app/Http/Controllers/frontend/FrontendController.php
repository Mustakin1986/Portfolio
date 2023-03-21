<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class FrontendController extends Controller
{
    public function index(){
        $allMenus= Menu::get();
       
        return view('frontend.home.index', compact('allMenus' ));
    }

    
}
