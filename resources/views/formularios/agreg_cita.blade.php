@extends('layouts.base')

@section('content')

@php
    use Illuminate\Support\Facades\DB;
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
<h2 class="mt-5 item-title text-center ">Agregar Nueva Cita</h2> 
  <div class="card card-body mb-3 kardA shadow-lg">



     <form action="{{ route('citas.store') }}" method="POST" class="row justify-content-center needs-validation" novalidate>
      @csrf
       
        <div class="form-group col-6">
            <label for="fecha_cita"><h6>Fecha de cita</h6></label>
            <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6">
            <label for="motivo_cita"><h6>Motivo de la cita</h6></label>
            <input type="text" name="motivo_cita" id="motivo_cita" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="col-12 mt-3">
        <h6 for="opciones">Estudiante:</h6>
                
              @php
                  $registros = DB::table('estudiantes')->get();
              @endphp  
                
                    
                
                <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="Estudiante_cita">
                  <option value=" ">Seleccione a un Estudiante</option>
                  @foreach ($registros as $registro)
                   <option value="{{ $registro->id_estudiante }}">{{ $registro->nombres}} {{$registro->apellidos}} {{$registro->cedula}}</option>
                  @endforeach   
                </select>
                
                
        </div>        

        
        <br>
        <br>    

        <button type="submit" name="Guardar_cita" class="btn btn-success btn-block col-2 mt-3" value="Guardado">Guardar</button>
        </div>
       
       
     </form>
   </div>
  </div>


@endsection
