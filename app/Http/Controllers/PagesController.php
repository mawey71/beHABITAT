<?php

namespace behabitat\Http\Controllers;

use Illuminate\Http\Request;

use behabitat\Http\Requests;
use behabitat\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function __construct()
	{
        //$this->middleware('auth');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    	return view('home');
    }

    public function about()
    {
    	return view('about');
    }
}
