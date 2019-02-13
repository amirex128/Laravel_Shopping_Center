<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\AttributeGroup;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttributeController extends Controller
{

    public function create(AttributeGroup $attributeGroup)
    {
        $attributes=Attribute::latest()->get();
        return view('admin.page.attribute.attributeCreate',compact(['attributeGroup','attributes']));
    }

    public function store(request $request,AttributeGroup $attributeGroup)
    {
        $request->validate([
            'attribute'=>'required',
            'description'=>'required'
        ]);
        $attributeGroup->attribute()->create([
            'title'=>$request->input('attribute'),
            'description'=>$request->input('description')
        ]);

        return back()->with('success','عنوان مورد نظر شما با موفقیت ایجاد شد');
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return back()->with('destroy','عنوان مورد نظر شما با موفقیت حذف شد');

    }
}
