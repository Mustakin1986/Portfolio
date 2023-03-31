<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    public function contactInfoCreate(){
        return view('backend.admin.pages.contactinfo.create');
    }
    public function contactInfoStore(Request $request){
        $this->validate($request,[
            'title'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string',
        ]);
        $contactStore = new ContactInfo();
        $contactStore->title = $request->title;
        $contactStore->email = $request->email;
        $contactStore->phone = $request->phone;
        $contactStore->address = $request->address;
        $contactStore->save();
        return redirect(route('contact.info.list'))->with('Success','Contact Info Has been created');
    }

    public function contactInfoList(){
        $contactlist = ContactInfo::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.contactinfo.list',compact('contactlist'));
    }

    public function contactInfoDelete($id){
        $contactDelete = ContactInfo::find($id);
        $contactDelete->delete();
        return redirect(route('contact.info.list'))->with('success','Contact Info Has Been Deleted');
    }
    public function contactInfoEdit($id){
        $contactEdit = ContactInfo::find($id);
        return view('backend.admin.pages.contactinfo.edit',compact('contactEdit')); 
    }

    public function contactInfoUpdate(Request $request,$id){
        $contactInfoupdate = ContactInfo::find($id);
        $contactInfoupdate->title = $request->title;
        $contactInfoupdate->email = $request->email;
        $contactInfoupdate->phone = $request->phone;
        $contactInfoupdate->address = $request->address;
        $contactInfoupdate->save();
        return redirect(route('contact.info.list'))->with('Success','Contact Info Has been created');
    }
}
