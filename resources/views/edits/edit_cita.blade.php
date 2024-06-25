

@extends('layouts.base')

@section('content')
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
        <h2 class="text-center mt-3">Editar Cita</h2>
      <div class="card card-body">
      <form action="{{ route('citas.update', $citas->id_citas)}}" method="POST" class="row justify-content-center align-items-center">
        @csrf
        @method('PUT')
        <div class="form-group">
          <input name="fecha_cita" type="date" class="form-control" value="{{$citas->fecha_cita}}">
        </div>
        <div class="form-group">
        <textarea name="motivo_cita" class="form-control mt-2" cols="30" rows="5">{{$citas->motivo_cita}}</textarea>
        </div>
        <button class="btn btn-success mb-2 mt-3 col-4" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection