<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\BuyerReview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Symfony\Contracts\Service\Attribute\Required;

use App\Models\Slider;


class FrontendController extends Controller
{
    public function index(){
        $allMenus= Menu::get();
       $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('frontend.home.index', compact('allMenus', 'sliders' ));
    }
}
