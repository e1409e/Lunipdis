@extends('layouts.base')

@section('content')

<!-- PERIODOS -->

<div class="container w-75">
  <h2 class="mt-5 text-center">PERIODOS</h2>
  <div class="card card-body kardE"> 
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table id="Tper" class="table rounded table-hover   table-lg mb-2 mt-3">
            <thead>
              <tr>
                <th class="text-nowrap col-1">ID</th>
                <th class="text-nowrap col-auto">Periodos</th>
                <th class="col-1">Acciones</th>


              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
             

                    <td></td>
                    <td></td>

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

          <a href="" class="btn btn-primary mb-3 mt-3">Nuevo</a>
    </div>
  </div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
                $('#Tper').DataTable(
                    {
                        "language":{
                            "url":"{{ asset('JS/es-ES.json') }}"
                        },
                        "dom": 'flrti',
                    }
                )});
    
</script>

@endsection