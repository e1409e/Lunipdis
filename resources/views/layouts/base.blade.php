
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNIPDIS</title>

    <!-- <!– Bootstrap –> -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"/>  

    <!-- <!– Mi conf css –> -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extras.css') }}" rel="stylesheet">
    <!-- select2 css-->
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet" />
 

    <!-- <!– jQuery –> -->
    <script src="{{ asset('JS/jquery-3.7.1.js') }}"></script>

    <!-- <!– DataTables Stylesheet –> -->
    <link href="{{ asset('DataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('DataTables/datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('DataTables/dataTables.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('DataTables/responsive.dataTables.css') }}" rel="stylesheet">

    <!-- <!– DataTables JavaScript –> -->
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script src="{{ asset('DataTables/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('DataTables/responsive.dataTables.js') }}"></script>
    <script src="{{ asset('DataTables/pdfmake-0.2.7/pdfmake.js') }}"></script>
    <script src="{{ asset('DataTables/pdfmake-0.2.7/pdfmake.min.js') }}"></script>
    <script src="{{ asset('DataTables/pdfmake-0.2.7/vfs_fonts.js') }}"></script>
    <script src="{{ asset('DataTables/JSZip-3.10.1/jszip.js') }}"></script>
    <script src="{{ asset('DataTables/JSZip-3.10.1/jszip.min.js') }}"></script>
    
    <!-- select2 js-->
    <script src="{{ asset('select2/js/select2.min.js') }}"></script>


    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('CSS/font-awesome.min.css') }}">
    <script src="{{ asset('JS/fontA.js') }}"></script>


  <nav class="navbar navbar-expand-lg bg-primary  shadow-lg justify-content-between">
  <div class="container-fluid">
    <a class="navbar-brand bg-transparent shadow">
      <img src="{{ asset('img/logoUJGH.png') }}" alt="Logo" width="165" class="img-fluid d-inline-block align-text-center">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><i class="fa fa-house"></i>   Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('estudiantes.index') }}"><i class="fa fa-school"></i>   Estudiantes</a>
            </li>

           

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-labelledby="defaultDropdown">
                <i class="fa fa-people-roof"></i>   Parientes
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('padres.index') }}">Representante</a></li>
                <li><a class="dropdown-item" href="{{ route('parientes.index') }}">Otros Parientes</a></li>
              </ul>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-file-medical"></i>   Informe Medico
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('citas.index') }}">Citas</a></li>
                <li><a class="dropdown-item" href="{{ route('discapacidades.index') }}">Discapacidades</a></li>
                <li><a class="dropdown-item" href="{{ route('historialmedico.index') }}">Historial Medico</a></li>
                <li><a class="dropdown-item" href="{{ route('incidencias.index') }}">Incidencias</a></li>
                <li><a class="dropdown-item" href="{{ route('reportePisco.index') }}">Reporte Psicologico</a></li>
              </ul>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building-columns"></i>   Universidad
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Facultades">Facultades</a></li>
                <li><a class="dropdown-item" href="/carreras">Carreras</a></li>
                <li><a class="dropdown-item" href="{{ route('periodos.index') }}">Periodos</a></li>
              </ul>

              
                
              
 
        </ul>
    </div>
    <li>
      <a href="" class="btn btn-danger"><i class="fa fa-right-from-bracket"></i> Cerrar Sesion</a>
    </li>
  </div>
</nav>    
  

</head>
<body>
  <div>
    @yield('content')
  </div>
    





<!-- SCRIPTS -->
    <!--BOOTSTRAP-->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> 

     <!-- jQuery Library -->
     <script src="{{ asset('/js/jquery-3.7.1.js') }}"></script>
     <script src="{{ asset('/js/popper.min.js') }}"></script>

    <!-- validacion de campos -->
    <script src="{{ asset('js/validacion_bootstrap.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('.estuselect2').select2();
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.discselect2').select2();
});
</script>

</body>
<footer>

</footer>

</html>

