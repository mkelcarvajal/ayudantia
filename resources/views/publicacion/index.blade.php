@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
    
        <div class="col-md-12 col-md-offset-2">
        
            <div class="panel-heading">
                <div class="card">
                    <br>
                    <br>
                    <center>
                        <h1>Registros de publicaciones</h1>
                    </center>
                    <br>
                    <br>
                </div>
            </div>

            <div class="panel-body">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <a href="{{ route('publicaciones.create') }}" class="btn btn-primary" style="margin-bottom:20px; float:right">Crear publicación</a>
                            <tr>
                                <th>ID</th>
                                <th>Nombre del autor</th>
                                <th>Fecha de publicación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($publicaciones as $publicacion)
                                <tr>
                                    <td>{{ $publicacion->id }}</td>
                                    <td>{{ $publicacion->nombre_autos }}</td>
                                    <td>{{ $publicacion->fecha_publicacion }}</td>  
                                    <td> <a href="#" class="btn btn-info">Editar</a> </td>
                                    <td> 
                                        <form method ="post" action="{{ route('publicaciones.destroy', $publicacion->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    
    </div>

</div>

@endsection