<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AttributeItemController extends Controller
{
    public function create(Attribute $attribute)
    {
        return view('admin.page.attribute.attributeItemCreate');
    }
}
