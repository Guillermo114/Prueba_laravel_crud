
<!-- Modal edit-->
<div class="modal fade" id="edit{{$estudiante->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar estudiante</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  <form action="{{route('estudiantes.update',$estudiante->id)}}" method="post">
  @csrf
  @method('PUT')
  
        <div class="modal-body">
  
        <div class="mb-3">
          <label for="" class="form-label">Grupo</label>
          <input type="text"
            class="form-control" name="grupo" id="" aria-describedby="helpId" placeholder="" value='{{$grupo->nombre_grupo}}'>
  
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Semestre</label>
          <input type="text"
            class="form-control" name="semestre" id="" aria-describedby="helpId" placeholder="" value='{{$grupo->semestre}}'>
  
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Turno</label>
          <input type="text"
            class="form-control" name="turno" id="" aria-describedby="helpId" placeholder="" value='{{$grupo->turno}}'>
  
        </div>
  
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  