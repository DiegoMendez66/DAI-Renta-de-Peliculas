<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    
    protected $table = 'pelicula';

    protected $primaryKey = 'idpelicula';

    protected $fillable = ['nombre', 'director', 'genero','artista1','artista2'];

    //Relación uno a muchos
    public function rentas()
    {
        return $this->hasMany('App\Models\Renta');
    }
}
