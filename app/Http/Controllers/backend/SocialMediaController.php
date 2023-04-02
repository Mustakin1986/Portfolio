<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function socialMedia()
    {
      return view('backend.admin.social_media.create');
    }

    public function socialMediaStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'link'=>'required',
            'status'=>'required'
        ]);

        $socialMedia = new SocialMedia();
        $socialMedia->title = $request->title;
        $socialMedia->link = $request->link;
        $socialMedia->Status = $request->status;
        $socialMedia->save();
        return redirect(Route('socialMedia.index'))->with('success','Social media has been created');

    }
}
