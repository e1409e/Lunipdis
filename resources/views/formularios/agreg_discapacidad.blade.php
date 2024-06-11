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
<h2 class="mt-5 item-title text-center ">Agregar Discapacidad</h2>
<div class="col-md-8 mx-auto"> 
  <div class="card card-body mb-3 kardA">
     <form action="{{ route('discapacidades.store') }}" method="POST" class="row justify-content-center needs-validation">
      @csrf


        <div class="form-group col-9">
            <label for="discapacidad"><h6>Discapacidad</h6></label>
            <input type="text" name="discapacidades" id="discapacidades" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        

        
        <br>
        <br>    

        <input type="submit" name="Guardar_disc" class="btn btn-success btn-block col-4 mt-3" value="Guardado">
        </div>
       
       
     </form>
   </div>
</div>
</div>


@endsection
