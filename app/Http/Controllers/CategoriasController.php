<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtro="%p%";
        $categorias=Categorias::where("nom_cat","like",$filtro)->orderby('id_catpreg')->get();
        return view("categorias.index",compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_cat' => 'required|unique:categorias_preguntas',
        ]);


        $categoria=array('nom_cat'=>$request->nom_cat);
        Categorias::create($categoria);
        return redirect("categorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categoria)
    {
        //
        return view("categorias.edit",compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categoria)
    {
        //
       // dd($request->all());
        $categoria->update($request->all());
        return redirect("categorias");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias  $catego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categoria)
    {
        //dd($categoria);
       $categoria->delete();
        //Categorias::destroy($categoria->id_catpreg);
        return redirect("categorias");

    }
}
