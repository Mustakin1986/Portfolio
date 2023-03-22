<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('backend.admin.pages.modules.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.admin.pages.modules.slider.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $this->validate($request,[
            'title' =>'required|string',
            'image' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        if($request->file('image')){
            $name = time().'.'. $request->image->extension();
            $request->image->move(public_path('/slider/'), $name);
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->slug = str_replace(' ','-',strtolower($request->title));
        $slider->image = $name;
        $slider->save();

        session()->flash('success','Category Created Successfully');
        return redirect(route('sliders.index'));
    }

    public function edit()
    {
        return view('backend.admin.pages.modules.slider.edit');
    }

}
