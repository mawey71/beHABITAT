<?php

namespace behabitat;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model; //añadido porsiaca
use Illuminate\Database\Eloquent\SoftDeletes; //para los softdeletes

class User extends Authenticatable
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function perfil()
    {
        return $this->hasOne('App\Profile');
    }
}
