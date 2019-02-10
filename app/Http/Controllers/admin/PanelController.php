<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function index()
    {
        return view("admin.page.index");
   }
}
