<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function show( Request $request, string $user)
    {
        
        $nombre = $request->input('nombre');
        $array = array("Manolo", "Maria", "Pedro", "Pablo");

        return view('user.show', ['nombre' => $array[$user], 'user_id' => $user]);
  
    }

    public function store( Request $request)
    {        
        $nombre = $request->input('nombre');
        return view('user.show', ['nombre' => $nombre, 'user_id' => 1]);
  
    }

    public function index()
    {
        $array = array("Manolo", "Maria", "Pedro", "Pablo");
        return view('user.index',  ['array' => $array]);
    }

    public function edit(string $user)
    {
        $array = array("Manolo", "Maria", "Pedro", "Pablo");
        return view('user.edit',['nombre' => $array[$user], 'user_id' => $user]);
    }

    public function update(Request $request, string $user)
    {
        $nombre = $request->input('nombre');
        return view('user.show', ['nombre' => $nombre, 'user_id' => $user]);
    }

    public function destory(Request $request, string $user)
    {     
        $nombre = $request->input('nombre');
        $array = array("Manolo", "Maria", "Pedro", "Pablo");

        $mensaje = "Usuario {$array[$user]} ha sido eliminado";
        return view('user.index')->with(['array' => $array, 'mensaje' => $mensaje]);
        return view('user.index',['array' => $array, 'mensaje' => $mensaje]);
        return view('user.index', compact('array', 'mensaje'));
    }
}
