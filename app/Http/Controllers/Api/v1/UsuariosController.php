<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return response()->json($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datos = $request->all();
        // dd($datos);

        $usuarios = new Usuarios;
        $usuarios-> nombre = $request->nombre;
        $usuarios-> apellido = $request->apellido;
        $usuarios-> email = $request->email;
        $usuarios->save();

        return response ()->json([
            "message"=>"Registro creado exitosamente !"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuarios = Usuarios::find($id);

        if (!empty($usuarios)){
            return response->json($usuarios);
        }
        else{
            return response ()->json([
                "message"=>"Registro no encontrado!"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuarios::find($id);

        $usuarios-> nombre = $request->nombre;
        $usuarios-> apellido = $request->epellido;
        $usuarios-> email = $request->email;
        $usuarios->save();

        return response ()->json([
            "message"=>"Registro actualizado exitosamente !"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();

        return response ()->json([
            "message"=>"Registro eliminado exitosamente !"
        ]);
    }
}
