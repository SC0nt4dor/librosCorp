<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha_tecnica extends Model
{
    use HasFactory;
    public $table='ficha_tecnica';
    protected $primaryKey='ID_ficha_tecnica';
    protected $fillable  = [
    'sinopsis',
    'genero',
    'autor'
    ];
}
