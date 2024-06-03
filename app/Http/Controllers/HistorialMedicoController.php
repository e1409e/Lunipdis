<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedicoModel;
use Illuminate\Http\Request;

class HistorialMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info_medico.historial_medico');
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
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function show(HistorialMedicoModel $historialMedicoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialMedicoModel $historialMedicoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialMedicoModel $historialMedicoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialMedicoModel $historialMedicoModel)
    {
        //
    }
}
