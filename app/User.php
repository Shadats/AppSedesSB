<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
//la declaramos perfil para declarar la relacion 1 a 1 y la inversa en el otro 
class User extends Authenticatable
{
    use Notifiable;

    /** 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profiles(){
        return $this->hasOne('App\Profile','user_id','id');
        // segundo parametro es la foreign key si la hay 
        // en el 3ero si no se llama id 
        // $aux = $user -> perfil -> descripcion (esto va en el controller)
    }
}
