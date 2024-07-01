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
        $historiales = HistorialMedicoModel::all();
        return view('info_medico.historial_medico', compact('historiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.agreg_hist_medico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       HistorialMedicoModel::create($request->all());
       return redirect()->route('historialmedico.index')->with('success', 'Historial Guardado Correctamente');
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
    public function edit($id)
    {
        $historiales = HistorialMedicoModel::findOrFail($id);
        return view('edits.edit_hist', compact('historiales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $historial = HistorialMedicoModel::findOrFail($id);
        $historial->id_estudiante=$request->input('id_estudiante');
        $historial->certificado_conapdis=$request->input('certificado_conapdis');
        $historial->informe_medico=$request->input('informe_medico');
        $historial->tratamiento=$request->input('tratamiento');

        $historial->save();    
        return redirect()->route('historialmedico.index')->with('success', 'Historial Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialMedicoModel  $historialMedicoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historial = HistorialMedicoModel::findOrFail($id);
        $historial->delete();    
        return redirect()->route('historialmedico.index')->with('success', 'Historial Eliminado Correctamente');
    }
}
