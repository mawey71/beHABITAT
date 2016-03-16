<?php

namespace behabitat\Http\Requests;

use behabitat\Http\Requests\Request;

class ProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (Request::is('registroCliente')) {
            return [
                'nombre'                => 'required',
                'primer_apellido'       => 'required',
                'segundo_apellido'      => 'required',
                'nif'                   => 'required|unique:profiles',
                'username'              => 'required|unique:users',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required',
                'password_confirmation' => 'required|same:password',
                'direccion'             => 'required',
                'localidad'             => 'required',
                'provincia'             => 'required',
                'codigo_postal'         => 'required|digits:5',
            ];

        } else { // registroProveedor
            return [
                'razon_social'          => 'required',
                'cif'                   => 'required|unique:profiles',
                'nombre'                => 'required',
                'username'              => 'required|unique:users',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required',
                'password_confirmation' => 'required|same:password',
                'direccion'             => 'required',
                'localidad'             => 'required',
                'provincia'             => 'required',
                'codigo_postal'         => 'required|digits:5',
            ];
        }
    }
}
