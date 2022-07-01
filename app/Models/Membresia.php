<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    protected $table = 'membresia';

    protected $primaryKey = 'idmembresia';

    protected $fillable = ['fecha_expedicion', 'fecha_expiracion'];

    //Relacion uno a uno
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente');
    }
}
