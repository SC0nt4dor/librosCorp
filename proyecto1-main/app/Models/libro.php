<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class libro extends ficha_tecnica
{
    use HasFactory;
    public $table='libro';

    protected $primaryKey='ID_libro';
    protected $fillable = [
        'titulo',
        'foto'
      ];
    public function cotizacion(){
        return $this->hasMany(cotizacion::class);
    }
}
