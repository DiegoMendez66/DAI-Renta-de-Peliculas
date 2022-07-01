<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membresia;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MembresiaController extends Controller
{
    public function index()
    {   
        //INNER JOIN
        $membresia = DB::table('membresia')
            ->where('apellido_paterno',Auth::user()->apellido)
            ->join('cliente','cliente.idcliente','=','membresia.idcliente')
            ->select('idmembresia','cliente.nombrecli','membresia.fecha_expedicion','membresia.fecha_expiracion')
            ->get();
        return view('cliente.membresia', compact('membresia'));
    }
}
