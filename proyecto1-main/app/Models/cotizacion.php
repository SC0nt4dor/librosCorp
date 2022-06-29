<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    use HasFactory;
    protected $table='cotizacion';
    protected $primaryKey='ID_cotizacion';
     protected $fillable =[
    'stock',
    'precio',
    'tienda',
    'referencia'
   ];
   public function libro(){
    return $this->belongsTo(libro::class);
   }
}
