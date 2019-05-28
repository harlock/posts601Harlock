<?php

namespace App\Http\Controllers;

use App\Nacionalidades;
use Illuminate\Http\Request;

class NacionalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $nacionalidades=Nacionalidades::orderby('id_nacionalidad')->get();
        return view("Nacionalidades.index",compact('nacionalidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Nacionalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'desc_nacionalidad' => 'required',
        ]);

        $nacionalidades=array('nom_na'=>$request->desc_nacionalidad);
        Nacionalidades::create($nacionalidades);
        return redirect("nacionalidades");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nacionalidades  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function show(Nacionalidades $nacionalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nacionalidades  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacionalidades $nacionalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nacionalidades  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacionalidades $nacionalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nacionalidades  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidades $nacionalidad)
    {
        //
    }
}
