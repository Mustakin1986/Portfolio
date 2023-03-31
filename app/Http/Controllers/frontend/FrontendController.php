<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Foa;
use App\Models\ContactInfo;
use App\Models\Clintlogo;

class FrontendController extends Controller
{
    public function index(){
        $allMenus= Menu::get();
        $allClientLogo= Clintlogo::get();
        $allFaq = Foa::get();
        $allContactInfo = ContactInfo::get();
        $services = Service::get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('frontend.home.index', compact('allContactInfo','allMenus', 'sliders','services','allFaq','allClientLogo' ));
    }
}
