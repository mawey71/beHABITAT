<?php

namespace behabitat\Http\Controllers;

use Illuminate\Http\Request;

use behabitat\Http\Requests;
use behabitat\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function home() {
		return view('admin.home');
	}

}
