<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
	//首页
    public function home(){
        //返回
        return view('home');
    }
}
