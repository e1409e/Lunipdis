<?php

namespace App\Http\Controllers;

use App\Models\EstudiantesModel;
use App\Models\UniversidadModel;
use App\Models\FacultadModel;
use Illuminate\Support\Facades\DB;
use App\Models\PadresModel;
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
        //$estudiantes = EstudiantesModel::all();
        $estudiantes = EstudiantesModel::all();
        $facultad = FacultadModel::all();

        return view('estudiantes', compact('estudiantes', 'facultad'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discapacidades = DB::table('discapacidad')->get();
        $carreras = DB::table('carrera')->get();
        $facultades = DB::table('facultad')->get();
        $periodos = DB::table('periodo')->get();
        return view('formularios.agreg_E', compact('discapacidades', 'carreras', 'facultades', 'periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //EstudiantesModel::create($request->all());
        $datosEstudiante = [
            //datos personales del estudiante

            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'cedula' => $request->input('cedula'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
            'observaciones' => $request->input('observaciones'),
            'seguimiento' => $request->input('seguimiento'),
            'discapacidad_id' => $request->input('discapacidad_id'),

            //datos de universidad

            'carrera_id' => $request->input('carrera_id'),
            'periodo_id' => $request->input('periodo_id'),
            'facultad_id' => $request->input('facultades_id'),

            //datos del representante
            'nombre_contacto' => $request->input('nombre_contacto'),
            'telefono_contacto' => $request->input('telefono_contacto'),
            'tipo_familiar' => $request->input('parentesco'),
            'cedula_padre' => $request->input('cedula_repre'),
            'lugar_nacimiento' => $request->input('lug_naci'),
            'fecha_nacimiento' => $request->input('fech_naci'),
            'direccion_habitacion' => $request->input('dir_hab'),
            'lugar_trabajo' => $request->input('lug_trab'),
            'estado' => $request->input('Estado'),
            'municipio' => $request->input('municipio'),
            'departamento' => $request->input('departamento'),
            'estado_civil' => $request->input('Edo_civil'),

        ];
        
        $id_estudiante = DB::table('estudiantes')->insertGetId([
            'nombres' => $datosEstudiante['nombres'],
            'apellidos' => $datosEstudiante['apellidos'],
            'cedula' => $datosEstudiante['cedula'],
            'telefono' => $datosEstudiante['telefono'],
            'correo' => $datosEstudiante['correo'],
            'nombre_contacto' => $datosEstudiante['nombre_contacto'],
            'telefono_contacto' => $datosEstudiante['telefono_contacto'],
            'discapacidad_id' => $datosEstudiante['discapacidad_id'],
            'fecha_nacimiento' => $datosEstudiante['fecha_nacimiento'],
            'observaciones' => $datosEstudiante['observaciones'],
            'seguimiento' => $datosEstudiante['seguimiento'],
           
        ]);

        DB::table('universidad')->insert([
            'id_estudiante' => $id_estudiante,
            'carrera_id' => $datosEstudiante['carrera_id'],
            'facultad_id' => $datosEstudiante['facultad_id'],
            'periodo_id' => $datosEstudiante['periodo_id'],
            
            
        ]);
        DB::table('padres')->insert([
            
            'nombre_contacto' => $datosEstudiante['nombre_contacto'],
           
            'tipo_familiar' => $datosEstudiante['tipo_familiar'],
            'cedula_padre' => $datosEstudiante['cedula_padre'],
            'lugar_nacimiento' => $datosEstudiante['lugar_nacimiento'],
            'fecha_nacimiento' => $datosEstudiante['fecha_nacimiento'],
            'direccion_habitacion' => $datosEstudiante['direccion_habitacion'],
            'telefono_contacto' => $datosEstudiante['telefono_contacto'],
            'lugar_trabajo' => $datosEstudiante['lugar_trabajo'],
            'estado' => $datosEstudiante['estado'],
            'municipio' => $datosEstudiante['municipio'],
            'departamento' => $datosEstudiante['departamento'],
            'estado_civil' => $datosEstudiante['estado_civil'],
            'id_estudiante' => $id_estudiante
            
        ]);
        // UniversidadModel::create($request->all());
        // PadresModel::create($request->all());
        return redirect()->route('universidad.index')->with('success', 'Estudiante Guardado Correctamente');
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
    public function edit($id)
    {
        $estudiante = EstudiantesModel::findOrFail($id);
        $universidad = DB::table('universidad')
            ->where('id_estudiante', $id)
            ->first();
       
        $padre = DB::table('padres')
        ->where('id_estudiante', $id)
        ->first();
        return view('edits.edit_estudiante', compact('estudiante', 'padre', 'universidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantes = EstudiantesModel::findOrFail($id);
        $estudiantes->nombres=$request->input('nombres');
        $estudiantes->apellidos=$request->input('apellidos');
        $estudiantes->fecha_nacimiento=$request->input('fecha_nacimiento');
        $estudiantes->cedula=$request->input('cedula');
        $estudiantes->telefono=$request->input('telefono');
        $estudiantes->correo=$request->input('correo');
        $estudiantes->discapacidad_id=$request->input('discapacidad_id');
        $estudiantes->observaciones=$request->input('observaciones');
        $estudiantes->seguimiento=$request->input('seguimiento');

        
        $universidad = UniversidadModel::firstOrNew(['id_estudiante' => $id]);
        // $universidad = DB::table('universidad')
        // ->where('id_estudiante', $id)
        // ->first();
        $universidad->carrera_id=$request->input('carrera_id');
        $universidad->periodo_id=$request->input('periodo_id');
        $universidad->facultad_id=$request->input('facultad_id');
        $universidad->save();

        $estudiantes->save();
            
        return redirect()->route('universidad.index')->with('success', 'Estudiante Editado Correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstudiantesModel  $estudiantesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes = EstudiantesModel::findOrFail($id);
        $estudiantes->delete();    
        return redirect()->route('universidad.index')->with('success', 'Estudiante Eliminado Correctamente');
    }
}
