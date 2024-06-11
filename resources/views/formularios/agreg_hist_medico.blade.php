@extends('layouts.base')

@section('content')
    <!-- AGREGAR HISTORIAL MEDICO -->


<div class="container w-75">
<h2 class="mt-5 item-title text-center ">Agregar Historial Medico</h2> 
  <div class="card card-body kardA">
     <form action="/UNIPDIS/includes/guardados/save_HM.php" method="POST" class="row justify-content-center align-items-center needs-validation">
       

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="estudiantes_uni" required>
                   <option></option>
                   
                </select>
                 <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

         
            <div class="form-group col-6 mt-2">
                <label for="conapdis"><h6>¿Posee Certificado del Conapdis?:</h6></label>
                <input type="text" name="conapdis" id="conapdis" class="form-control" required>
                 <div class="valid-feedback"></div>
                 <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


     
            <div class="form-group col-12 mt-2">
                <label for="inf_med"><h6>Agregar Informe Medico:</h6></label>
                <textarea name="inf_med" id="inf_med" rows="4" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

        
            <div class="form-group">
                <label for="tratamiento"><h6>Tratamiento:</h6></label>
                <textarea name="tratamiento" id="tratamiento" rows="2" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
               
            </div>

            <br>
            <br>
            <input type="submit" name="Guardar_HM" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>

@endsection