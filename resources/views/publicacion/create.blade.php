@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
    
        <div class="col-12">
        
            <form action="{{ route('publicaciones.store') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="nombre_autos" class="form-control" placeholder="Ingrese nombre de autor">
                    </div>
                    <div class="col">
                        <input type="date" name="fecha_publicacion" class="form-control" placeholder="Ingrese la fecha de publicacion">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <textarea class="form-control" placeholder="Ingrese una descripción" name="texto_parrafo">
                        
                        </textarea>
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="text" name="imagen" class="form-control">
                        </div>
                    </div>
                </div>
                
                <br>

                <div>
                    <button class="btn btn-success">Crear registro</button>
                </div>

            </form>
        
        </div>

    </div>

</div>


@endsection