@extends('layouts.base')

@section('content')



<div class="container w-75">
<h2 class="mt-5 item-title text-center ">Agregar Nueva Cita</h2> 
  <div class="card card-body mb-3 kardA">
     <form action="{{ route('citas.store') }}" method="POST" class="row justify-content-center needs-validation" novalidate>
       
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
                <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="Estudiante_cita">
                   <option value="Estudiante">Seleccione un Estudiante</option>
                   
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
