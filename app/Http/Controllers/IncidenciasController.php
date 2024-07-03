<?php

namespace App\Http\Controllers;

use App\Models\IncidenciasModel;
use App\Models\EstudiantesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = EstudiantesModel::all();
        $incidencias = IncidenciasModel::all();
        return view('info_medico.incidencias', compact('incidencias', 'estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.agreg_incidencias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $datos = [
        //     //datos del incidente

        //     'id_estudiante' => $request->input('id_estudiante'),
        //     'hora_incidente' => $request->input('hora_incidente'),
        //     'fecha_incidente' => $request->input('fecha_incidente'),
        //     'lugar_incidente' => $request->input('lugar_incidente'),
        //     'descripcion_incidente' => $request->input('descripcion_incidente'),
        //     'acuerdos' => $request->input('acuerdos'),
        //     'observaciones' => $request->input('observaciones')];

        DB::table('incidencias')->insert([
                'id_estudiante' => $request->input('id_estudiante'),
                'hora_incidente' => $request->input('hora_incidente'),
                'fecha_incidente' => $request->input('fecha_incidente'),
                'lugar_incidente' => $request->input('lugar_incidente'),
                'descripcion_incidente' => $request->input('descripcion_incidente'),
                'acuerdos' => $request->input('acuerdos'),
                'observaciones' => $request->input('observaciones')  
            ]); 

        return redirect()->route('incidencias.index')->with('success', 'Incidencia Guardada Correctamente');
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
