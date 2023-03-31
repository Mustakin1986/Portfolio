<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foa;

class FoaController extends Controller
{
    public function faqCreate(){
        return view('backend.admin.pages.faq.create');
    }
    public function faqStore(Request $request){
        $this->validate($request,[
            'title'=>'Required|string',
            'description'=>'Required|string',
            'question'=>'Required|string',
            'answer'=>'Required|string',
        ]);
        $faq = new Foa();
        $faq->title = $request->title;
        $faq->colops = $request->colops;
        $faq->heading = $request->heading;
        $faq->description = $request->description;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect(route('faq.list'))->with('Success','faq has been Created');
    }
    public function faqList(){
        $faqs = Foa::orderby('created_at','desc')->paginate(5);
        return view('backend.admin.pages.faq.list',compact('faqs'));
    }
    public function faqdelete($id){
        $faq = Foa::find($id);
        $faq->delete();
        return redirect()->back()->with('Success','faq has been delete');
    }
    public function faqEdit($id){
        $faqs = Foa::find($id);
        return view('backend.admin.pages.faq.edit',compact('faqs'));
    }
    public function faqUpdate(Request $request,$id){
        $this->validate($request,[
            'title'=>'string',
            'description'=>'string',
            'question'=>'string',
            'answer'=>'string',
        ]);
        $faq = Foa::find($id);
        $faq->title = $request->title;
        $faq->colops = $request->colops;
        $faq->heading = $request->heading;
        $faq->description = $request->description;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect(route('faq.list'))->with('Success','faq has been Update');
    }
}
