<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Menu::all(), 200); //200: OK 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar menu
        $datos = $request -> validate([
            'nombre'=>['required','string'],
            'descripcion'=>['string'],
            'precio'=>['required','integer'],
            'categoria'=>['string'],
            'disponibilidad'=>['required','string']
        ]);
        //guardar datos
        $menu=Menu::create($datos);
        //respuesta al cliente
        return response()->json(['success'=>true,'message'=>'Menu creado exitosamente'],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return response()->json($menu,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //validar menu
        $datos = $request -> validate([
            'nombre'=>['required','string'],
            'descripcion'=>['string'],
            'precio'=>['required','integer'],
            'categoria'=>['string'],
            'disponibilidad'=>['required','string']
        ]);
        //actualizar datos
        $menu-> update($datos);
        //respuesta al cliente
        return response()->json(['success'=>true,'message'=>'Menu actualizado exitosamente'],200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //eliminar menu
        $menu->delete();
        //respuesta al cliente
        return response()->json(['success'=>true,'message'=>'El menu ha sido eliminado correctamente'],200);
    }
}
