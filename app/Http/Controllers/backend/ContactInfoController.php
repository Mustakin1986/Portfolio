<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    //
    public function contactList(){
        $contactInfo=ContactInfo::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.contactForm.list',compact('contactInfo'));
    }

    public function contactFormCreate(Request $request){
        $this->validate($request,[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
            'email'=>'required',
        ]);

        $contactForm = new ContactInfo();
        $contactForm->first_name = $request->first_name;
        $contactForm->last_name = $request->last_name;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        $contactForm->email = $request->email;
        $contactForm->save();
        return redirect()->back()->with('Success','Your contact form has been created');

    }
}
