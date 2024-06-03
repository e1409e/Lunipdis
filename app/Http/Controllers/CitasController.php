<?php

namespace App\Http\Controllers;

use App\Models\CitasModel;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info_medico.citas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.agreg_cita');
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
     * @param  \App\Models\CitasModel  $citasModel
     * @return \Illuminate\Http\Response
     */
    public function show(CitasModel $citasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CitasModel  $citasModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CitasModel $citasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CitasModel  $citasModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitasModel $citasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CitasModel  $citasModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CitasModel $citasModel)
    {
        //
    }
}
