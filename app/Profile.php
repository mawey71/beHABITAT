<?php

namespace behabitat;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
	use SoftDeletes;

    protected $dates = ['deleted_at'];
	
	protected $table = 'profiles';

	protected $fillable = [
        'rol', 'nombre', 'primer_apellido', 'segundo_apellido', 'nif', 'direccion', 'localidad', 'provincia', 'codigo_postal', 'telefono', 'telefono_movil'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
