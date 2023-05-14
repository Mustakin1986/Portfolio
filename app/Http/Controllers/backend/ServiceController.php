<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function serviceCreate(){
        return view('backend.admin.pages.service.create');
    }

    public function serviceStore(Request $request){
        $this->validate($request,[
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required'
        ]);
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/service/'),$name);
        }
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->slug = str_replace(' ','_',strtolower($request->description));
        $service->image = $name;
        $service->save();
        return redirect(route('service.list'))->with('success','Service Has been created.');
    }

    public function serviceList(){
        $services = Service::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.service.list',compact('services'));
    }

    public function serviceDelete($id){
        $serviceDelete = Service::find($id);
        $serviceDelete->delete();
        return redirect()->back()->with('success','Service Has Been Deleted');
    }

    public function serviceEdit($id){
        $services = Service::find($id);
        return view('backend.admin.pages.service.edit',compact('services'));

    }

    public function serviceUpdate(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required'
        ]);

        $services = Service::find($id);
        if(isset($request->image)){
            if($services->image && file_exists('/backend/admin/assets/service/'.$services->image)){
                unlink('/backend/admin/assets/service/'.$services->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/service/'),$updateImage);
            $services->image = $updateImage;
        } 
        $services->title = $request->title;
        $services->description = $request->description;
        $services->slug = str_replace(' ','_',strtolower($request->description));
        $services->save();
        return redirect(route('service.list'))->with('success','service has been updated');
    }
}
