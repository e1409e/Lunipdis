@extends('layouts.base')

@section('content')


<div class="container mb-5 W-75">
  <h2 class="mt-5 text-center">REPRESENTANTES</h2>
  <div class="card card-body kardE"> 
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table  rounded table-hover table-lg mb-2 mt-3" id="padre">
            <thead>
              <tr>
                <th class="text-nowrap col-auto"></th>
                <th class="text-nowrap col-auto">#</th>
                <th class="col-auto">Parentesco</th>

                <th class="text-nowrap col-auto">Nombre Del Representante</th>
                <th class="text-nowrap col-auto">Cedula</th>
                <th class="text-nowrap col-auto">Lugar de Nacimiento</th>
                <th class="text-nowrap col-auto">Fecha de Nacimiento</th>
                <th class="text-nowrap col-autp">Direccion</th>
                <th class="text-nowrap col-auto">Tlf. Contacto:</th>
                <th class="text-nowrap col-auto">Lugar de Trabajo:</th>
                <th class="text-nowrap col-auto">Estado:</th>
                <th class="text-nowrap col-auto">Municipio:</th>
                <th class="text-nowrap col-auto">Departamento:</th>
                <th class="text-nowrap col-auto">Estado Civil:</th>
                <th class="text-nowrap col-auto">Estudiante:</th>
                
                <th class="col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
            
            
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                     <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"></td>
                    
                  

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

        
    </div>
  </div>
     
</div> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#padre').DataTable({
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
                  exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    },
                  filename: function() {
                    return "Incidencias"      
                    }, 
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
