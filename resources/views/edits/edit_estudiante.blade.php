@extends('layouts.base')

@section('content')
@php
$discapacidades = DB::table('discapacidad')->get();
$carreras = DB::table('carrera')->get();
$facultades = DB::table('facultad')->get();
$periodos = DB::table('periodo')->get();
@endphp
<div class="container p-4">
  <div class="row">
    <div class="col mx-auto">
        <h2 class="text-center mt-3">Editar Estudiante</h2>
      <div class="card card-body">
      <form action="{{route('estudiantes.update', $estudiante->id_estudiante)}}" method="POST" class="row justify-content-center align-items-center">
        @csrf
        @method('PUT')
         <div class="form-group col-6 mt-2">
            <label for="motivo_cita"><h6>Nombre del Estudiante:</h6></label>
            <input type="text" name="nombres" id="nombre" class="form-control" value="{{$estudiante->nombres}}" required >
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
            
        
        <div class="form-group col-6 mt-2">
            <label for="apellido"><h6>Apellido del Estudiante:</h6></label>
            <input type="text" name="apellidos" id="apellido" class="form-control" value="{{$estudiante->apellidos}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

          <div class="form-group col-6 mt-2">
            <label for="fechN"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fecha_nacimiento" id="fechN" class="form-control" value="{{$estudiante->fecha_nacimiento}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

           
        
        <div class="form-group col-6 mt-2">
            <label for="cedula"><h6>Cédula del Estudiante:</h6></label>
            <input type="text" name="cedula" id="cedula" class="form-control" value="{{$estudiante->cedula}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono"><h6>Teléfono del Estudiante:</h6></label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{$estudiante->telefono}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="correo"><h6>Correo Académico:</h6></label>
            <input type="text" name="correo" id="correo" class="form-control" value="{{$estudiante->correo}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

       
       
        {{-- <div class="form-group col-6 mt-2">
            <label for="nombre_contacto"><h6>Nombre del Representante:</h6></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control" value="{{$estudiante->nombre_contacto}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono_contacto"><h6>Teléfono del Representante</h6></label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" class="form-control" value="{{$estudiante->}}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div> --}}

        <div class="col-6 mt-2">
        <h6 for="opciones">Discapacidad:</h6>
                 
                <select class="form-select discselect2" aria-label="Default select example" name="discapacidad_id" id="discapacidad" required>
                  @foreach ($discapacidades as $discapacidad)
                   <option value="{{ $discapacidad->id_discapacidad }}" @selected( $discapacidad->id_discapacidad == $estudiante->discapacidad_id)>{{ $discapacidad->discapacidades}}</option>
                  @endforeach 
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>   
        </div>
        
        <div class="col-6 mt-4">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="carrera_id" id="carrera" required>
                  @foreach ($carreras as $carrera)
                  <option value="{{ $carrera->id_carrera }}" @selected( $carrera->id_carrera == $universidad->carrera_id)>{{ $carrera->carreras}}</option>
                  @endforeach
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-4 mb-4">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="facultad_id" id="facultades" required>
                  @foreach ($facultades as $facultad)
                  <option value="{{ $facultad->id_facultad }}" @selected( $facultad->id_facultad == $universidad->facultad_id)>{{ $facultad->facultades}}</option>
                  @endforeach
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>
            

            <div class="col-6 mt-4 mb-4">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="periodo_id" id="periodo" required>
                  @foreach ($periodos as $periodo)
                  <option value="{{ $periodo->id_periodo }}" @selected( $periodo->id_periodo == $universidad->periodo_id)>{{ $periodo->periodos}}</option>
                  @endforeach
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>  

        <div class="form-group col-12 mt-2">
            <label for="observaciones"><h6>Observaciones:</h6></label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control"  required>{{$estudiante->observaciones}}</textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="form-group col-12 mt-2">
            <label for="seguimiento"><h6>Seguimiento:</h6></label>
            <textarea name="seguimiento" id="seguimiento" rows="4" class="form-control" required>{{$estudiante->seguimiento}}</textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
        

       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection