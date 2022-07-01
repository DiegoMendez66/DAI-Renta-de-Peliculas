<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renta;

use Illuminate\Support\Facades\DB;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //INNER JOIN
        $rentas = DB::table('renta')->orderBy('fecha_registro','DESC')
            ->join('cliente','cliente.idcliente','=','renta.idcliente')
            ->join('pelicula','pelicula.idpelicula','=','renta.idpelicula')
            ->select('cliente.nombrecli','cliente.apellido_paterno','cliente.apellido_materno','pelicula.nombre','renta.fecha_registro','renta.fecha_devolucion')
            ->get();

        return view('Renta.index',compact('rentas'));
    }
}
