<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nurcontroller extends Controller
{
    public function index(){
       return view('frontend.home.homeContent');
   }
}
