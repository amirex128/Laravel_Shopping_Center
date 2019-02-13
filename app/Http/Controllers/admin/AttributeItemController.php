<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\AttributeItem;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttributeItemController extends Controller
{
    public function create(Attribute $attribute)
    {
       $attributeItems = AttributeItem::latest()->get();
        return view('admin.page.attribute.attributeItemCreate',compact(['attribute','attributeItems']));
    }

    public function store(request $request,Attribute $attribute)
    {
       $attribute->attributeItem()->create([
            'title'=>$request->input('attribute'),
            'label'=>$request->input('description'),
            'value'=>explode(',',$request->input('value'))
        ]);
        return back()->with('success'," سطر مورد نظر شما با موفقیت به ویژگی $attribute->title ");
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }
    public function destroy(AttributeItem $attributeItem)
    {
        $attributeItem->delete();
        return back()->with('destroy','سطر مورد نظر شما با موفقیت حذف گردید');
    }
}
