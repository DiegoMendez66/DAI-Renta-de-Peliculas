<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $primaryKey = 'idcliente';

    protected $fillable = ['nombrecli', 'apellido_paterno', 'apellido_materno','fecha_nacimiento'];

    //Relacion de uno a muchos

    public function rentas()
    {
        return $this->hasMany('App\Models\Renta');
    }

    public function membresia()
    {
        return $this->belongsTo('App\Models\Membresia');
    }
}
