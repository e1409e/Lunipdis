@extends('layouts.base')

@section('content')

<div class="container w-75">
  @if(Session::get('success'))
    <div class="alert alert-success mt-2">
      <strong>{{Session::get('success')}}</strong> <br>
    </div>

  @endif
  <h2 class="mt-5 text-center">CITAS</h2>
  <div class="card card-body mb-3 kardE shadow">
  
    <div class="table-responsive" > 
        
          <table id="Tcitas" class="table  rounded table-hover table-lg mb-2 mt-3 ">
            <thead>
              <tr>
                <th class="col-auto"></th>
                <th class="col-auto">#</th>
                <th class="col-auto">Estudiante</th>
                <th class="col-1 text-nowrap">Fecha de la Cita</th>
                <th class="col-auto">Motivo de la Cita</th>
                <th class="col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              @foreach ($citas as $cita)

                <tr>
                  <!-- columnas de la tabla en mysql-->
                  <td class="text-nowrap col-auto"></td>
                  <td class="text-nowrap col-auto">{{$cita->id_citas}}</td>
                  <td class="text-nowrap col-auto">{{$cita->estudiantes->nombres}}</td>
                  <td class="text-nowrap text-left col-1" style="text-align: left;">{{$cita->fecha_cita}}</td>
                  <td class="text-nowrap col-auto">{{$cita->motivo_cita}}</td>
                  
                  <!--Botones de acciones-->
                    <td>
                      <div class="btn-group">
                      <a href="{{ route('citas.edit', $cita)}}" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                      <a href="" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                      </div> 
                    </td> 
                </tr>
                      
                  
              @endforeach
                     

            
            </tbody>
          </table>

       
        
       

    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('citas.create')}}" class="btn btn-primary mb-3 mt-3  w-50">Nuevo</a>
    </div>
  </div>
     
     
</div>
 
<script type="text/javascript">
    $(document).ready(function() {
        $('#Tcitas').DataTable({
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