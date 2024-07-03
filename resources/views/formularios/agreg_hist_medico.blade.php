@extends('layouts.base')

@section('content')
    <!-- AGREGAR HISTORIAL MEDICO -->

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
<h2 class="mt-5 item-title text-center ">Agregar Historial Medico</h2> 
  <div class="card card-body shadow kardA">
     <form action="{{route('historialmedico.store')}}" method="POST" class="row justify-content-center align-items-center needs-validation">
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
                <label for="conapdis"><h6>¿Posee Certificado del Conapdis?:</h6></label>
                <input type="text" class="form-control" name="certificado_conapdis" id="certificado_conapdis">
                 <div class="valid-feedback"></div>
                 <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


     
            <div class="form-group col-12 mt-2">
                <label for="inf_med"><h6>Agregar Informe Medico:</h6></label>
                <textarea name="informe_medico" id="informe_medico" rows="4" class="form-control"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

        
            <div class="form-group">
                <label for="tratamiento"><h6>Tratamiento:</h6></label>
                <textarea name="tratamiento" id="tratamiento" rows="2" class="form-control"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
               
            </div>

            <br>
            <br>
            <input type="submit" name="Guardar_hist" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>

@endsection