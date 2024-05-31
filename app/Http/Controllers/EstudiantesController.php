<?php

namespace App\Http\Controllers;

use App\Models\EstudiantesModel;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estudiantes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CrearEstudiante');
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
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function show(EstudiantesModel $estudiantesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(EstudiantesModel $estudiantesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstudiantesModel $estudiantesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstudiantesModel $estudiantesModel)
    {
        //
    }
}
