<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Usuario extends Authenticatable
{
    //use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'img_perfil',
        'nombre_usuario',
        'nombre',
        "apellidos",
        "email",
        "password",
        "remember_token"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    /*protected $hidden = [
        'password',
        'remember_token',
    ];*/

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/

     //Relacion con post
     public function posts(){

        return $this->hasMany("App\Models\Post");
    }

    public function roles(){
        return $this->belongsToMany("App\Models\Role");
    }

    //Averiguacion de los roles

    public function authorizeRoles($roles) {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }
    
    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    
    /*
    COMPROBAR ROL
    Auth::user()->hasRole("admin")
    */
    public function hasRole($role) {
        if ($this->roles()->where('nombre_role', $role)->first()) {
            return true;
        }
        return false;
    }
}
