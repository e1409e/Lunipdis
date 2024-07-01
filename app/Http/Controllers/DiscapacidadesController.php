<?php

namespace App\Http\Controllers;

use App\Models\DiscapacidadesModel;
use Illuminate\Http\Request;

class DiscapacidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discapacidades = DiscapacidadesModel::all();
        return view('info_medico.discapacidades', compact('discapacidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.agreg_discapacidad');
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
            'discapacidades' => 'required',
            
        ]);
        
       DiscapacidadesModel::create($request->all());
       return redirect()->route('discapacidades.index')->with('success', 'Discapacidad Guardada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function show(DiscapacidadesModel $discapacidadesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discapacidades = DiscapacidadesModel::findOrFail($id);
        return view('edits.edit_disc', compact('discapacidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discapacidades = DiscapacidadesModel::findOrFail($id);
        $discapacidades->discapacidades=$request->input('discapacidades');
        
        $discapacidades->save();    
        
         return redirect()->route('discapacidades.index')->with('success', 'Discapacidad Editada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscapacidadesModel  $discapacidadesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discapacidades = DiscapacidadesModel::findOrFail($id);
        $discapacidades->delete();
        return redirect()->route('discapacidades.index')->with('success', 'Discapacidad Eliminada Correctamente');
    }
     public function obtenerRegistros()
    {
        $registros = DB::table('discapacidad')->get();
    
        return view('formularios.agreg_discapacidad', compact('registros'));
    }
}
