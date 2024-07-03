@extends('layouts.base')

@section('content')

<div class="container w-75">
  @if(Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show mt-2">
    <strong>{{Session::get('success')}}</strong> 
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><br>
  </div>

@endif
  <h2 class="mt-5 text-center">Reportes Psicologicos</h2>
  <div class="card card-body kardE">
  
    

    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table id="Thm" class="table  rounded table-hover table-lg mb-2 mt-3 ">
            <thead>
              <tr>
                <th class="col-1"></th>
                <th class="col-1">#</th>
                <th class="text-nowrap col-auto">Nombre</th>
                <th class="text-nowrap col-auto">Apellido</th>
                <th class="text-nowrap col-auto">Lugar de Nacimiento</th>
                <th class="text-nowrap col-auto">Fecha de Nacimiento</th>
                <th class="text-nowrap col-auto">Edad</th>
                <th class="text-nowrap col-auto">Nivel de Instrucción</th>
                <th class="text-nowrap col-auto">Motivo de Consulta</th>
                <th class="text-nowrap col-auto">Síntesis Diagnóstica</th>
                <th class="text-nowrap col-auto">Recomendaciones</th>
                <th class="text-nowrap col-1">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
                @foreach ($collection as $item)
                    
                @endforeach
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                   
                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                           

            
            </tbody>
          </table>

        <!-- </div>
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button>  -->
        <a href="" class="btn btn-primary mb-3 mt-3">Nuevo</a> 
       

    </div>
  </div>
     
</div> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#Thm').DataTable({
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