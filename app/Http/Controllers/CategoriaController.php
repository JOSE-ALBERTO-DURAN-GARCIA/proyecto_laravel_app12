<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * funListar
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias= Categoria::get();
        return view("admin.categoria.listar",compact("categorias"));
    }

    /**
     * funCrear
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * funGuardar
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->detalle= $request->detalle;
        $categoria->save();

        return redirect()->back();
    }

    /**
     * funMostrar
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * funEditar
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * funModificar
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * funEliminar
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->back();
    }
}
