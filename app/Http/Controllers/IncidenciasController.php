<?php

namespace App\Http\Controllers;

use App\Models\IncidenciasModel;
use Illuminate\Http\Request;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info_medico.incidencias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncidenciasModel  $incidenciasModel
     * @return \Illuminate\Http\Response
     */
    public function show(IncidenciasModel $incidenciasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncidenciasModel  $incidenciasModel
     * @return \Illuminate\Http\Response
     */
    public function edit(IncidenciasModel $incidenciasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncidenciasModel  $incidenciasModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncidenciasModel $incidenciasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncidenciasModel  $incidenciasModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncidenciasModel $incidenciasModel)
    {
        //
    }
}
