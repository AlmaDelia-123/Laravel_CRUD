@extends('plantilla')

@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('insertar') }}" class="col-md-5">
            @csrf
            <div class="form-group mb-3">
                <label for="titulo">Título</label>
                <input name="titulo" id="titulo" class="form-control" type="text" value="{{old('titulo')}}">
            </div>

            <div class="form-group mb-3">
                <label for="descripcion">Descripción</label>
                <input name="descripcion" id="descripcion" class="form-control" type="text"
                    value="{{old('descripcion')}}">
            </div>

            <div class="form-group mb-3">
                <label for="director">Director</label>
                <input name="director" id="director" class="form-control" type="text" value="{{old('director')}}">
            </div>

            <div class="form-group mb-3">
                <label for="genero">Género</label>
                <input name="genero" id="genero" class="form-control" type="text" value="{{old('genero')}}">
            </div>

            <div class="form-group mb-3">
                <label for="fecha_estreno">Fecha de estreno</label>
                <input type="date" name="fecha_estreno" id="fecha_estreno" class="form-control"
                    value="{{old('fecha_estreno')}}">
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Añadir</button>

            <a href="{{ route('list') }}" class="btn btn-secondary w-100 mb-3">Cancelar</a>


            @if($errors->any())
            <div class="alert alert-danger rounder-3">
                <ul class="error-text">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>


</div>
@endsection