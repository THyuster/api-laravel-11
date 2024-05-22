<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();

        return response()->json($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Productos;
        $productos->nombre = $request->nombre;
        $productos->cantidad = $request->cantidad;
        $productos->precio = $request->precio;
        $productos->save();

        return response()->json([
            "message"=>"Registro creado exitosamente"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productos = Productos::find($id);

        if(!empty($productos)){
            return response->json($productos);
        }
        else{
            return response()->json([
                "message"=>"Registro no encontrado"
            ]);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = Productos::find($id);

        $productos->nombre=$request->nombre;
        $productos->cantidad=$request->cantidad;
        $productos->precio=$request->precio;

        $productos->save();

        return response ()->json([
            "message"=>"Registro actualizado exitosamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos = Productos::find($id);
        $productos -> delete();

        return response ()->json([
            "message"=>"Registro eliminado exitosamente"
        ]);
    }
}
