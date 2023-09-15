

<!-- Modal Create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar alumno</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  <form action="{{route('estudiantes.store')}}" method="post">
  @csrf
  
        <div class="modal-body">

  
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
  
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido paterno</label>
          <input type="text"
            class="form-control" name="apellido_paterno" id="" aria-describedby="helpId" placeholder="">
  
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido materno</label>
          <input type="text"
            class="form-control" name="apellido_materno" id="" aria-describedby="helpId" placeholder="">
  
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input type="text"
              class="form-control" name="edad" id="" aria-describedby="helpId" placeholder="">
    
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="text"
              class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
    
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input type="text"
              class="form-control" name="teléfono" id="" aria-describedby="helpId" placeholder="">
    
          </div>

          
          <div class="mb-3">
            <label for="" class="form-label">Grupo</label>
          <select name="id_grupo" id="" class="form-control">

          @foreach($grupos as $grupo)
          <option value="{{$grupo->id}}">{{$grupo->nombre_grupo}}</option>
        @endforeach
      </select>
          </div>
  
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>