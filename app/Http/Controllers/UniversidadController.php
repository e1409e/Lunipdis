<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\UniversidadModel;
use Illuminate\Http\Request;
use App\Models\EstudiantesModel;
use App\Models\DiscapacidadesModel;


use App\Models\FacultadModel;


class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = DB::table('estudiantes')
        ->join('universidad', 'estudiantes.id_estudiante', '=', 'universidad.id_estudiante')
        ->join('facultad', 'universidad.facultad_id', '=', 'id_facultad')
        ->join('discapacidad', 'discapacidad.id_discapacidad', '=', 'discapacidad_id')
        ->join('periodo', 'universidad.periodo_id', '=', 'id_periodo' )
        ->join('carrera', 'universidad.carrera_id', '=', 'id_carrera' )
        ->select('estudiantes.*', 'facultad.*', 'periodo.*', 'carrera.*', 'discapacidad.*')
         ->get();

        
        return view('estudiantes', compact('estudiantes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UniversidadModel $universidadModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UniversidadModel $universidadModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UniversidadModel $universidadModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UniversidadModel $universidadModel)
    {
        //
    }
}
