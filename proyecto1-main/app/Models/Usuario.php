<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticable
{
    use HasApiTokens,HasFactory,Notifiable;
    protected $table='usuario';

protected $fillable = [
    'nombre',
    'contraseña',
    'email',
    'ID_usuario'
];

public $timestamps = false;
protected $hidden = [
'contraseña'
];

protected $casts=['email_verified_at'=>'DateTime'];

public function encriptarContra($contraseña) {

    $this->attributes['contraseña'] = bcrypt($contraseña);
}
protected static function boot()
{
    parent::boot();

    // auto-sets values on creation
    static::creating(function ($query) {

        for($i=0;$i<1000;$i++){
        $query->ID_usuario= $i;
        }
    });
}
}
