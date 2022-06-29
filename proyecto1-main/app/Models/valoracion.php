<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valoracion extends Model
{
    use HasFactory;
    public $table='valoracion';
    protected $fillable=[
    'puntaje',
    'ID_valoracion',
    'comentario'
    ];
}
