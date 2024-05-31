@extends('layouts.base')

@section('content')



<div class="container w-75">
<h2 class="mt-5 ">Agregar Datos Universitarios del Estudiante</h2> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_datos_uni.php" method="POST" class="row justify-content-center align-items-center needs-validation">
       

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni" required>
                   <option value="estudiantes_uni">Seleccione un estudiante</option>
                
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-2">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select" aria-label="Default select example" name="carrera_id" id="carrera" required>
                   <option value="carrera">Seleccione una carrera</option>
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-2">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select" aria-label="Default select example" name="facultades_id" id="facultades" required>
                   <option value="default">Seleccione una Facultad</option>
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>
            

            <div class="col-6 mt-2">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select" aria-label="Default select example" name="periodo_id" id="periodo" required>
                   <option value="periodo">Seleccione un periodo</option>
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>          

        

            
         <br>
       <br>      
        <input type="submit" name="Guardar_datos_uni" class="btn btn-success btn-block col-2 mt-3 mb-3" value="Guardado">
        </div>
       
      
       
     </form>
   </div>
  </div>

@endsection
