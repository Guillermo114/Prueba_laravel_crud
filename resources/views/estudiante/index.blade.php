@extends('welcome')
@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <br>
    <table class="table">
        
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO PATERNO</th>
                <th scope="col">APELLIDO MATERNO</th>
                <th scope="col">EDAD</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TELÉFONO</th>
                <th scope="col">GRUPO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td scope="row">{{$estudiante->id}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->apellido_paterno}}</td>
                <td>{{$estudiante->apellido_materno}}</td>
                <td>{{$estudiante->edad}}</td>
                <td>{{$estudiante->email}}</td>
                <td>{{$estudiante->teléfono}}</td>
                <td>
                    
                    @foreach($grupos as $grupo)
                        @if($grupo->id == $estudiante->id_grupo)
                            {{$grupo->nombre_grupo}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$estudiante->id}}">
                        Editar
                    </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$estudiante->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('estudiante.create')


@endsection
