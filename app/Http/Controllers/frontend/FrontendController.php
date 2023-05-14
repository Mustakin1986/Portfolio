<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Slider;
use App\Models\LastWork;
use App\Models\BuyerReview;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Symfony\Contracts\Service\Attribute\Required;


class FrontendController extends Controller
{
    public function index(){
        $allMenus= Menu::get();
        $portfolios = LastWork::get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('frontend.home.index', compact('allMenus', 'sliders','portfolios' ));
    }

}
