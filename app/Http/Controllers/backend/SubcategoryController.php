<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    public function subcategoryCreate();

    return view('backend.admin.pages.subcategory.create');
}
