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
                <th scope="col">GRUPO</th>
                <th scope="col">SEMESTRE</th>
                <th scope="col">TURNO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
                
         
            <tr class="">
                <td scope="row">{{$grupo->id}}</td>
                <td>{{$grupo->nombre_grupo}}</td>
                <td>{{$grupo->semestre}}</td>
                <td>{{$grupo->turno}}</td>
                <td>
         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$grupo->id}}">
        Editar
  
        </button>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$grupo->id}}">
        Eliminar
        </button>




                </td>
                @include('grupo.info') 

                @endforeach
        </tbody>
    </table>
</div>
@include('grupo.create')

@endsection