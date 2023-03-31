<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clintlogo;

class ClientController extends Controller
{
    public function clientLogoCreate(){
        return view('backend.admin.pages.clientlogo.create');
    }
    public function clientLogoStore(Request $request){
        $this->validate($request,[
            'title'=>'Required|string',
            'image'=>'required'
        ]);
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/clientslogo/'),$name);
        }
        $clientsLogos = new Clintlogo();
        $clientsLogos->title = $request->title;
        $clientsLogos->image =$name;
        $clientsLogos->save();
        return redirect(route('client.logo.list'))->with('Success','Client Logo Has been Uploded');

    }

    public function clientLogoList(){
        $clientLogoList = Clintlogo::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.clientlogo.list',compact('clientLogoList'));
    }
    public function clientLogoDelete($id){
        $clientLogoDelete = Clintlogo::find($id);
        $clientLogoDelete->delete();
        return redirect(route('client.logo.list'))->with('success','Clinetlogo has been deleted');
    }
    public function clientLogoEdit($id){
        $clientLogoEdit = Clintlogo::find($id);
        return view('backend.admin.pages.clientlogo.edit',compact('clientLogoEdit'));
    }
    public function clientLogoUpdate(Request $request,$id){
        $this->validate($request,[
            'title'=>'required|string',
        ]);
        $clientLogoudate = Clintlogo::find($id);
        if(isset($request->image)){
            if($clientLogoudate->image && file_exists('/backend/admin/assets/clientslogo/'.$clientLogoudate->image)){
                unlink('/backend/admin/assets/clientslogo/'.$clientLogoudate->image);

            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/backend/admin/assets/clientslogo/'),$updateImage);
            $clientLogoudate->image = $updateImage;
        }
        $clientLogoudate->title = $request->title;
        $clientLogoudate->save();
        return redirect(route('client.logo.list'))->with('Success','Client Logo Has Been Successfully Update ?');

    }
}
