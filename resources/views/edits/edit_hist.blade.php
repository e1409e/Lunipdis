@extends('layouts.base')

@section('content')
<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
        <h2 class="text-center mt-3">Editar Historial Medico</h2>
      <div class="card card-body">
        <form action="{{ route('historialmedico.update', $historiales->id_historialmedico)}}" method="POST" class="row justify-content-center align-items-center">
        @csrf
        @method('PUT')

           <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
                @php
                  $registros = DB::table('estudiantes')->get();
                @endphp  
                <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="id_estudiante">
                  <option value=" ">Seleccione a un Estudiante</option>
                  @foreach ($registros as $registro)
                   <option value="{{ $registro->id_estudiante }}" @selected( $registro->id_estudiante == $historiales->id_estudiante)>{{ $registro->nombres}} {{$registro->apellidos}} {{$registro->cedula}}</option>
                  @endforeach   
                </select>
                 <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>   

         
            <div class="form-group col-6 mt-2">
                <label for="conapdis"><h6>¿Posee Certificado del Conapdis?:</h6></label>
                <input type="text" name="certificado_conapdis" id="certificado_conapdis" class="form-control" value="{{$historiales->certificado_conapdis}}">
            </div>


     
            <div class="form-group col-12 mt-2">
                <label for="inf_med"><h6>Agregar Informe Medico:</h6></label>
                <textarea name="informe_medico" id="informe_medico" rows="4" class="form-control">{{$historiales->informe_medico}}</textarea>
            </div>

        
            <div class="form-group mt-2">
                <label for="tratamiento"><h6>Tratamiento:</h6></label>
                <textarea name="tratamiento" id="tratamiento" rows="2" class="form-control">{{$historiales->tratamiento}}</textarea>
               
            </div>

            <br>
            <br>
            <button class=" btn btn-success mb-2 mt-3 col-4" name="update">Actualizar</button>

        </div>
       
       
     </form>
      </div>
    </div>
  </div>
</div>
@endsection