<?php

namespace App\Http\Controllers;

use App\Models\CitasModel;
use App\Models\EstudiantesModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = CitasModel::all();
        
        return view('info_medico.citas', compact('citas'));
    }
    public function obtenerRegistros()
    {
        $registros = DB::table('citas')->get();
    
        return view('formularios.agreg_cita', compact('registros'));
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
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'fecha_cita' => 'required',
            'motivo_cita' => 'required'
        ]);
        
       CitasModel::create($request->all());
       return redirect()->route('citas.index')->with('success', 'Cita Programada Correctamente');
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
        
        $cita = CitasModel::findOrFail($citasModel);
        return view('edits.edit_cita', compact('cita'));
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
