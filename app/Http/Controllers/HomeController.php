<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;

class HomeController extends Controller 
{

    public function index() 
    {
    	echo "Welcome to Laravel";die;

    }


    public function blog()
    {
	return view('blog');
    }

}
