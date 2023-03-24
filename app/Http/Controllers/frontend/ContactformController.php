<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactformController extends Controller
{
    public function contactFormCreate(Request $request){
        $this->validate($request,[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
            'email'=>'required',
        ]);

        $contactForm = new ContactForm();
        $contactForm->firstName = $request->first_name;
        $contactForm->LastName = $request->last_name;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        $contactForm->email = $request->email;
        $contactForm->save();
        return redirect()->back()->with('Success','Your contact form has been created');

    }

    public function contactList(){
        $contactForm = ContactForm::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.contactForm.list',compact('contactForm'));
    }
}
