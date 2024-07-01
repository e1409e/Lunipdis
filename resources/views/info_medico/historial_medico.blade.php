@extends('layouts.base')

@section('content')

<div class="container w-75">
  @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2">
      <strong>{{Session::get('success')}}</strong> 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><br>
    </div>

  @endif
  <h2 class="mt-5 text-center">HISTORIAL MEDICO</h2>
  <div class="card card-body shadow kardE mb-3">
  
    

    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table id="Thm" class="table  rounded table-hover table-lg mb-2 mt-3 ">
            <thead>
              <tr>
                <th class="col-1"></th>
                <th class="col-1">#</th>
                <th class="text-nowrap col-auto">Estudiante</th>
                <th class="text-nowrap col-auto">Certificado de Conapdis</th>
                <th class="text-nowrap col-auto">Informe Medico</th>
                <th class="text-nowrap col-auto">Tratamiento</th>
                <th class="text-nowrap col-1">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              
               @foreach ($historiales as $historial)
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                      <td class="text-nowrap col-auto"></td>
                      <td class="text-nowrap col-auto">{{$historial->id_historialmedico}}</td>
                      <td class="text-nowrap col-auto">{{$historial->estudiantes->nombres}}</td>
                      <td class="text-nowrap col-auto">{{$historial->certificado_conapdis}}</td>
                      <td class="text-nowrap col-auto">{{$historial->informe_medico}}</td>
                      <td class="text-nowrap col-1">{{$historial->tratamiento}}</td>
                   
                      <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="{{ route('historialmedico.edit', $historial->id_historialmedico)}}" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$historial->id_historialmedico}}">
                              <i class="fa fa-trash"></i>
                          </button>
                        </div>
                      </td> 
                  </tr>
                  @include('eliminar.elimHist')
                @endforeach 
            </tbody>
          </table>

        <div class="d-flex justify-content-center">
           <a href="{{ route('historialmedico.create')}}" class="btn btn-primary mb-3 mt-3  w-50">Nuevo</a>
        </div>
       

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
                },
                {
                  extend: 'print',
                  text: '<i class="fa fa-print"></i> ',
                  titleAttr: 'Imprimir',
                  className: 'btn btn-info',
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