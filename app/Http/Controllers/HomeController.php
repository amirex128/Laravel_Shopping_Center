<?php

namespace App\Http\Controllers;



use App\Article;
use App\User;

class HomeController extends Controller
{


    public function index()
    {
    
    	     auth()->loginUsingId(1);
		$user =User::find(1);
//		$user->roles()->sync([1,2,3,4]);
		if(\Gate::allows('View',Article::class)){
			return $user->roles()->get() ;
			
		}else{
			abort(404);
		}
    }
}
