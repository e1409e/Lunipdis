@extends('layouts.base')

@section('content')
    <!-- AGREGAR INCIDENCIAS -->
@php
use Illuminate\Support\Facades\DB;
$registros = DB::table('estudiantes')->get();
@endphp 


<div class="container w-75">
@if ($errors->any())
  <br>
  <br>
  <div class="alert alert-danger">
      <strong>Error inesperado</strong> Algo fue mal..<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<h2 class="mt-5 item-title text-center">Agregar Incidencias</h2> 
  <div class="card card-body shadow kardA">
     <form action="{{route('incidencias.store')}}" method="POST" class="row justify-content-center align-items-center needs-validation">
        @csrf

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
           
            <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="id_estudiante">
                <option value=" ">Seleccione a un Estudiante</option>
                @foreach ($registros as $registro)
                <option value="{{ $registro->id_estudiante }}">{{ $registro->nombres}} {{$registro->apellidos}} {{$registro->cedula}}</option>
                @endforeach   
            </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div> 

            
            <div class="form-group col-6 mt-2">
                <label for="hora_incidente"><h6>Hora del Incidente:</h6></label>
                <input type="time" name="hora_incidente" id="hora_incidente" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            
            <div class="form-group col-6 mt-2">
                 <label for="fecha_incidente"><h6>Fecha del Incidente:</h6></label>
                <input type="date" name="fecha_incidente" id="fecha_incidente" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

             
            <div class="form-group col-6 mt-2">
                <label for="lugar_incidente"><h6>Lugar del Incidente:</h6></label>
                <input type="text" name="lugar_incidente" id="lugar_incidente" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="descripcion_incidente"><h6>Descripción del incidente:</h6></label>
                <textarea name="descripcion_incidente" id="descripcion_incidente" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="acuerdos"><h6>Acuerdos:</h6></label>
                <textarea name="acuerdos" id="acuerdos" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-12 mt-2">
                <label for="observaciones"><h6>Observaciones:</h6></label>
                <textarea name="observaciones" id="observaciones" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

          

            <input type="submit" name="Guardar_incidente" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>


@endsection