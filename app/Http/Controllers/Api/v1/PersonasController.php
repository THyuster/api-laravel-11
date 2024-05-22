<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Personas::all();
        return response()->json($personas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personas = new personas;
        $personas-> nombre = $request->nombre;
        $personas-> apellido = $request->apellido;
        $personas-> email = $request->email;
        $personas-> edad = $request->edad;
        $personas->save();

        return response ()->json([
            "message"=>"Registro creado exitosamente !"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personas = Personas::find($id);

        if (!empty($personas)){
            return response->json($personas);
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
    public function update(Request $request,$id)
    {
        $personas = Personas::find($id);

        $personas-> nombre = $request->nombre;
        $personas-> apellido = $request->epellido;
        $personas-> email = $request->email;
        $personas-> edad = $request->edad;
        $personas->save();

        return response ()->json([
            "message"=>"Registro actualizado exitosamente !"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personas = Personas::find($id);
        $personas->delete();

        return response ()->json([
            "message"=>"Registro eliminado exitosamente !"
        ]);
    }
}
