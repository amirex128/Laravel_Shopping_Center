<?php

namespace App\Http\Controllers\Admin;

use App\AttributeGroup;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeGroupController extends Controller
{

    public function index()
    {
        return view('admin.page.attribute.attributeGroupCreate');
    }


    public function create()
    {

       $categories=Category::latest()->get();
       $attributeGroups=AttributeGroup::latest()->get();

        return view('admin.page.attribute.attributeGroupCreate',compact(['categories','attributeGroups']));

    }

    public function store(request $request)
    {
        $request->validate([
            "attributeGroup"=>"required",
            "categories"=>"required",
        ]);

       $category= Category::find($request->categories);
        $category->attributeGroup()->create([
            "title"=>$request->input('attributeGroup')
        ]);

        return back()->with('success','دسته بندی ویژگی شما با موفقیت اضافه شد');
    }


}
