<?php

namespace App\Http\Controllers\backend;

use App\Models\LastWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatestWorkController extends Controller
{
    public function portfolioCreate()
    {
        return view('backend.admin.pages.portfolio.create');
    }

    public function portfolioStore(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'image'=>'required',
            'project_name'=>'required|string',
            'description'=>'required|string',
        ]);
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/portfolio/'),$name);
        }

        $portfolio = new LastWork();
        $portfolio->title = $request->title;
        $portfolio->image =$name;
        $portfolio->project_name = $request->project_name;
        $portfolio->description = $request->description;
        $portfolio->save();
        return redirect(route('portfolio.list'))->withSuccess('Portfolio has been created');
    }

    public function portfolioList()
    {
        $portfolios = LastWork::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.portfolio.list',compact('portfolios'));
    }
    public function portfolioDelete($id)
    {
        $portfolioDelete = LastWork::find($id);
        $portfolioDelete -> delete();
        return redirect()->back()->withSuccess('Portfolio has been deleted');
    }

    public function portfolioEdit($id)
    {
        $portfolioEdits = LastWork::find($id);
       return view('backend.admin.pages.portfolio.portfolioEdit',compact('portfolioEdits'));
    }
    public function portfolioUpdate(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'image'=>'required',
            'project_name'=>'required|string',
            'description'=>'required|string',
        ]);
        $portfolios = LastWork::find($id);
        if(isset($request->image)){
            if($portfolios->image && file_exists('/backend/admin/assets/portfolio/'.$portfolios->image)){
                unlink('/backend/admin/assets/portfolio/'.$portfolios->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/portfolio/'),$updateImage);
            $portfolios->image = $updateImage;
        }
            
            $portfolios->title = $request->title;
            $portfolios->project_name = $request->project_name;
            $portfolios->description = $request->description;
            $portfolios->save();
            return redirect(route('portfolio.list'))->withSuccess('Portfolio has been updated');
    }
   
}
