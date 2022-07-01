<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{   
    public function index()
    {

    $usuarios=User::orderBy('id','ASC')->paginate(10);
        return view('Usuario.index',compact('usuarios'));
    }
}
