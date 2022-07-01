<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renta;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MiRentaController extends Controller
{
    public function index()
    {   
        //INNER JOIN
        $renta = DB::table('renta')
            ->where('apellido_paterno',Auth::user()->apellido)
            ->orderBy('fecha_registro','DESC')
            ->join('cliente','cliente.idcliente','=','renta.idcliente')
            ->join('pelicula','pelicula.idpelicula','=','renta.idpelicula')
            ->select('cliente.nombrecli','cliente.apellido_paterno','cliente.apellido_materno','pelicula.nombre','renta.fecha_registro','renta.fecha_devolucion')
            ->get();
        return view('cliente.mirenta', compact('renta'));
    }
}
