@extends('layouts.base')

@section('content')
<div class="container mb-5 w-75">
  @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2">
      <strong>{{Session::get('success')}}</strong> 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><br>
    </div>

  @endif
    <h2 class="mt-5 text-center">ESTUDIANTES</h2>
    <div class="card card-body shadow kardE"> 
      
  
      <div class="table-responsive" > 
          
            <table id="estu" class="table rounded table-hover  table-lg mb-2 mt-3" >
              <thead>
                <tr>
                  <th class="col-auto"></th>
                  <th class="col-auto">#</th>
                  <th class="col-auto">Nombre</th>
                  <th class="col-auto">Apellido</th>
                  <th class="col-auto">Cedula</th>
                  <th class="col-auto">telefono</th>
                  <th class="col-auto">Correo</th>  
                  <th class="text-nowrap col-auto">Nomb. contacto</th>
                  <th class="text-nowrap col-auto">Tlf. contacto</th>
                  <th class="col-auto">Discapacidad:</th>
                  <th class="col-auto">Observaciones:</th>
                  <th class="col-auto">Seguimiento:</th>
                  <th class="col-auto">Fecha de Nacimiento:</th>
                  <th class="text-nowrap col-auto">Fecha de Registro:</th>
                  <th class="col-auto">Facultad:</th>
                  <th class="col-auto">Carrera:</th>
                  <th class="col-auto">Periodo:</th>
                  
  
  
                  <th class="col-auto">Acciones</th>
              
                </tr>
              </thead>
              <tbody>
                
                @foreach ($estudiantes as $estudiante)
               

                <tr>
                  <!-- columnas de la tabla en mysql-->
                  <td class="text-nowrap col-auto"></td>
                  <td class="text-nowrap col-auto">{{$estudiante->id_estudiante}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->nombres}}</td>
                  <td class="text-nowrap text-left col-1" style="text-align: left;">{{$estudiante->apellidos}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->cedula}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->telefono}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->correo}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->nombre_contacto}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->telefono_contacto}}</td>
                 
                  <td class="text-nowrap col-auto">{{$estudiante->discapacidades}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->observaciones}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->seguimiento}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->fecha_nacimiento}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->fecha_registro}}</td>
                  
                  <td class="text-nowrap col-auto">{{$estudiante->Siglas}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->carreras}}</td>
                  <td class="text-nowrap col-auto">{{$estudiante->periodos}}</td>
                  
                  <!--Botones de acciones-->
                    <td>
                      <div class="btn-group">
                      <a href="{{ route('estudiantes.edit', $estudiante->id_estudiante)}}" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$estudiante->id_estudiante}}">
                        <i class="fa fa-trash"></i>
                      </button>
                      </div> 
                    </td> 
                </tr>
                      
                @include('eliminar.elimEstu')
              @endforeach
  
                                 
  
              
              </tbody>
            </table>

          
            <div class="d-flex justify-content-center">
              <a href="{{ route('estudiantes.create')}}" class="btn btn-primary mb-3 mt-3  w-50"><span>Nuevo</span></a>
            </div>
         

  
      </div>
    </div>
  </div>  
  
  
  <script type="text/javascript">
      $(document).ready(function() {
          $('#estu').DataTable({
              "language": {
                  "url": "{{ asset('JS/es-ES.json') }}"
              },
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "dom": 'Bflrtpi',
            "pagingType": "simple_numbers",
            "info": true,
            
              buttons: [
                    {
                    extend: 'excelHtml5',
                    text: '<i class=" fa fa-file-excel-o"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                  },
                  {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    orientation: 'landscape',
                      pageSize: 'LEGAL',
                  },
                  {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    orientation: 'landscape',
                      pageSize: 'LEGAL',
                  },
  
                ],
              
           columnDefs: [
          {
              className: 'dtr-control',
              orderable: false,
              target: 0
          }
      ],
      order: [1, 'asc'],
      responsive: {
          details: {
              type: 'column',
              target: 'tr'
          }
      }
  
          });
      });
  </script>
    
@endsection