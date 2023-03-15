<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.admin.pages.modules.category.index');
    }


    public function create()
    {
        return view('backend.admin.pages.modules.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'slug'=>'required|unique:categories',
            'status'=>'required'
        ]);
    }


    public function show(Request $id)
    {
        //
    }


    public function edit(Request $id)
    {
        //
    }


    public function update(Request $id)
    {
        //
    }


    public function destroy(Request $id)
    {
        //
    }
}
