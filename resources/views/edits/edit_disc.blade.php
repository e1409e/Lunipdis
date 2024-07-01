

@extends('layouts.base')

@section('content')
<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h2 class="text-center mt-3">Editar Discapacidad</h2>  
      <div class="card card-body">
      <form action="{{ route('discapacidades.update', $discapacidades->id_discapacidad)}}" method="POST" class="row justify-content-center align-items-center">
        @csrf
        @method('PUT')

        <div class="form-group col-8">
            <label for="discapacidad"><h6>Discapacidad</h6></label>
            <input type="text" name="discapacidades" id="discapacidades" class="form-control" value="{{$discapacidades->discapacidades}}">
        </div>
       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection