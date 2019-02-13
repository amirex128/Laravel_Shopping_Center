<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributeItemController extends Controller
{
    public function create()
    {
        return view('admin.page.attribute.attributeItemCreate');
    }
}
