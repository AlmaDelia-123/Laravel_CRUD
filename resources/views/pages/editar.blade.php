@extends('plantilla')
@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <form method="post" action="{{route('actualizar',$pelicula->id)}}" class="col-md-5">
            @method('put')
            @csrf

            <div class="form-group mb-3">
                <label>Título</label>
                <input name="titulo" class="form-control mb-3" type="text" value="{{$pelicula->titulo}}"
                    value="{{old('titulo')}}">
            </div>
            <div class="form-group mb-3">
                <label>Descripción</label>
                <input name="descripcion" class="form-control mb-3" type="text" value="{{$pelicula->descripcion}}"
                    value="{{old('descripcion')}}">
            </div>
            <div class="form-group mb-3">
                <label>Director</label>
                <input name="director" class="form-control mb-3" type="text" value="{{$pelicula->director}}"
                    value="{{old('director')}}">
            </div>
            <div class="form-group mb-3">
                <label>Genero</label>
                <input name="genero" class="form-control mb-3" type="text" value="{{$pelicula->genero}}"
                    value="{{old('genero')}}">
            </div>
            <div class="form-group mb-3">
                <label>Fecha de estreno</label>
                <input type="date" name="fecha_estreno" class="form-control" value="{{ $pelicula->fecha_estreno }}"
                    value="{{old('fecha_estreno')}}">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Actualizar</button>

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