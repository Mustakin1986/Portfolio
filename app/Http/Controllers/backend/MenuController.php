<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $allMenus=Menu::get();
        return view('backend.admin.pages.menu.index',compact('allMenus'));
    }

    public function create(){
     return view('backend.admin.pages.menu.create');
    }

    public function Store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'description'=>'nullable',
            'status'=>'required'
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->slug= str_replace(' ','_',strtolower($request->name));
        $menu->description= $request->description;
        $menu->Status= $request->status;
        $menu->save();
        return redirect(route('menus.index'))->with('success','Menu has been created');

    }
    public function Delete($id)
    {
      $menuDelete = Menu::find($id);
      $menuDelete->delete();
      return redirect(route('menus.index'))->with('success','Menu Deleted Successfully');
    }

    public function menuEdit($id)
    {
      return view('backend.admin.pages.menu.edit');
    }
}
