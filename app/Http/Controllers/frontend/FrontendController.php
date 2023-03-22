<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\BuyerReview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;

class FrontendController extends Controller
{
    public function index(){
        $allMenus=Menu::get();
        return view('frontend.home.index', compact('allMenus'));
    }
    public function buyerCreate()
    {
        return view('frontend.testimonials');
    }

    public  function buyerReview(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'description'=>'required|string',
            'name'=>'required|string',
            'rating'=>'required|string',
            'designation'=>'required|string'
        ]);
        // if($request->file('image')){
        //     $name = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('/backend/admin/assets/service/'),$name);
        // }
        $ratings = new BuyerReview();
        $ratings->title = $request->title;
        $ratings->description = $request->description;
        $ratings->rating = $request->rating;
        $ratings->name = $request->name;
        $ratings->designation = $request->designation;
        $ratings->save();
        return redirect()->back()->withSuccess('Thank you for your rating us');

    }
   
    public function BuyerSlide()
    {
        $buyers = BuyerReview::with('desc')->paginate(5);
        return view('frontend.includes.testimonials',compact('buyers'));
    }
    
}
