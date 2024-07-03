@extends('layouts.base')

@section('content')       

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

<h2 class="mt-5 item-title text-center ">Agregar Nuevos Estudiantes</h2> 
  
  <div class="card card-body mb-3 kardA">
     <form action="{{ route('estudiantes.store')}}" method="POST" class="row justify-content-center align-items-center needs-validation" novalidate>
      @csrf
        
        
        <div class="form-group col-6  mt-2">
            <label for="nombre"><h6>Nombre del Estudiante:</h6></label>
            <input type="text" name="nombres" id="nombre" class="form-control" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  minlength="2" maxlength="50" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
            
        
        <div class="form-group col-6 mt-2">
            <label for="apellido"><h6>Apellido del Estudiante:</h6></label>
            <input type="text" name="apellidos" id="apellido" class="form-control" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+" minlength="2" maxlength="50" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

          <div class="form-group col-6 mt-2">
            <label for="fechN"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fecha_nacimiento" id="fechN" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

           
        
        <div class="form-group col-6 mt-2">
            <label for="cedula"><h6>Cédula del Estudiante:</h6></label>
            <input type="text" name="cedula" id="cedula" class="form-control" minlength="7" maxlength="8" pattern="\d{7,8}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono"><h6>Teléfono del Estudiante:</h6></label>
            <input type="text" name="telefono" id="telefono" class="form-control" minlength="11" maxlength="11" pattern="\d{11,11}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="correo"><h6>Correo Académico:</h6></label>
            <input type="text" name="correo" id="correo" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
        
        <div class="form-group col-12 mt-2">
            <label for="observaciones"><h6>Observaciones:</h6></label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control" required></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="form-group col-12 mt-2 mb-3">
            <label for="seguimiento"><h6>Seguimiento:</h6></label>
            <textarea name="seguimiento" id="seguimiento" rows="4" class="form-control" required></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="col-6 mt-4">
        <h6 for="opciones">Discapacidad:</h6>
                <select class="form-select discselect2" aria-label="Default select example" name="discapacidad_id" id="discapacidad" required>
                    <option value=" ">Seleccione una Discapacidad</option>
                    @foreach ($discapacidades as $discapacidad)
                     <option value="{{ $discapacidad->id_discapacidad }}">{{ $discapacidad->discapacidades}}</option>
                    @endforeach  
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>   
        </div>


        {{-- UNIVERSIDAD --}}

        <div class="col-6 mt-4">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="carrera_id" id="carrera" required>
                   <option value=" ">Seleccione una Carrera</option>
                   @foreach ($carreras as $carrera)
                     <option value="{{ $carrera->id_carrera }}">{{ $carrera->carreras}}</option>
                    @endforeach 
                    
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-4 mb-4">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="facultades_id" id="facultades" required>
                   <option value=" ">Seleccione una Facultad</option>
                    @foreach ($facultades as $facultad)
                     <option value="{{ $facultad->id_facultad }}">{{$facultad->facultades}}</option>
                    @endforeach
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>
            

            <div class="col-6 mt-4 mb-4">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="periodo_id" id="periodo" required>
                   <option value=" ">Seleccione un Periodo</option>
                   @foreach ($periodos as $periodo)
                     <option value="{{ $periodo->id_periodo }}">{{$periodo->periodos}}</option>
                    @endforeach
                   
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>   

            <br>
            <br>
            <br>
            <br>
            <hr>
        
            {{-- REPRESENTANTE --}}
            
        <h4 class="mt-3 mb-5 item-title text-center">Agregar Representante</h4>

        <div class="form-group col-6 mt-2">
            <label for="nombre_contacto"><h6>Nombre completo del Representante:</h6></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+" minlength="2" maxlength="50" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono_contacto"><h6>Teléfono del Representante</h6></label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" class="form-control" minlength="11" maxlength="11" pattern="\d{11,11}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>


         <div class="form-group col-6 mt-2">
            <label for="parentesco"><h6>Parentesco:</h6></label>
            <input type="text" name="parentesco" id="parentesco" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
                
        
        <div class="form-group col-6 mt-2">
            <label for="cedula_repre"><h6>Cédula del Representante:</h6></label>
            <input type="text" name="cedula_repre" id="cedula_repre" class="form-control" minlength="7" maxlength="8" pattern="\d{7,8}" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_naci"><h6>Lugar de Nacimiento:</h6></label>
            <input type="text" name="lug_naci" id="lug_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="fech_naci"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fech_naci" id="fech_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="dir_hab"><h6>Dirección de Habitación:</h6></label>
            <input type="text" name="dir_hab" id="dir_hab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
       
        
        <div class="form-group col-6 mt-2">
            <label for="lug_trab"><h6>Lugar de Trabajo:</h6></label>
            <input type="text" name="lug_trab" id="lug_trab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Estado"><h6>Estado:</h6></label>
            <input type="text" name="Estado" id="Estado" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="municipio"><h6>Municipio:</h6></label>
            <input type="text" name="municipio" id="municipio" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="departamento"><h6>Departamento:</h6></label>
            <input type="text" name="departamento" id="departamento" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Edo_civil"><h6>Estado Civil:</h6></label>
            <select type="text" name="Edo_civil" id="Edo_civil" aria-label="Default select example" class="form-select" required> 

            <option value="soltero/a">Soltero/a</option>    
            <option value="casado/a">Casado/a</option>
            <option value="divorciado/a">Divorciado/a</option>
            <option value="viudo/a">Viudo/a</option>

            </select>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

             

       
       <br>
       <br>
       <input type="submit" name="Guardar" class="btn btn-success btn-block col-3 mt-5" value="Guardado">
      

    </form>
  </div>
</div>



@endsection
