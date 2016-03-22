<?php

namespace behabitat\Http\Controllers;

use Illuminate\Http\Request;

use behabitat\Http\Requests;
use behabitat\Http\Controllers\Controller;
use behabitat\Profile;
use behabitat\User;

class PerfilController extends Controller
{
    public function index(Request $request) {
    	return ('mi perfil');
    }
}
