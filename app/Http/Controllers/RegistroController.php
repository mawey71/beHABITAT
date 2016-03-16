<?php

namespace behabitat\Http\Controllers;

use Illuminate\Http\Request;

use behabitat\Http\Requests;
use behabitat\Http\Controllers\Controller;
use behabitat\Http\Requests\ProfileRequest;

class RegistroController extends Controller
{
    public function mostrarFormRegistroCliente() {
        return view('auth.registroCliente');
    }

    public function mostrarFormRegistroProveedor() {
        return view('auth.registroProveedor');
    }

    public function registroCliente(ProfileRequest $request) {
        echo "alert(hola);";
        dump($request);
        // grabar perfil cliente
    }

    public function registroProveedor(ProfileRequest $request) {
        // grabar perfil proveedor
        dd($request);
    }
}
