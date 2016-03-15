<?php

namespace behabitat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //para los softdeletes

class Profile extends Model
{
	use SoftDeletes;

    protected $dates = ['deleted_at'];
	
	protected $table = 'profiles';

	protected $fillable = [
        'rol', 'nombre', 'primer_apellido', 'segundo_apellido', 'nif', 'razon_social', 'cif', 'direccion', 'localidad', 'provincia', 'codigo_postal', 'telefono', 'telefono_movil'
    ];

    protected $hidden = ['rol'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
