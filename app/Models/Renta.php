<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;

    protected $table = 'renta';

    protected $primaryKey = 'idrenta';

    protected $fillable = ['fecha_registro', 'fecha_devolucion', 'fecha_entrega'];

    //Relacion uno a muchos(inversa)

    public function pelicula()
    {
        return $this->belongsTo('App\Models\Pelicula');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente')
    }
}
