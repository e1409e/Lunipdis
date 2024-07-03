<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$estudiante->id_estudiante}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{ route('estudiantes.destroy', $estudiante->id_estudiante)}}" method="POST">
            @csrf
            @method('DELETE')
            
          
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADVERTENCIA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Deseas Eliminar al Estudiante {{$estudiante->id_estudiante}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
          <button type="submit" class="btn btn-danger d-inline-block">SI</button>
        </div>
      </div>
    </form>
    </div>
  </div>