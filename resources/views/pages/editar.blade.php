@extends('plantilla')
@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <form method="post" action="{{route('actualizar',$pelicula->id)}}" class="col-md-5">
            @method('put')
            @csrf
            <input name="titulo" class="form-control mb-3" type="text" value="{{$pelicula->titulo}}">
            <input name="descripcion" class="form-control mb-3" type="text" value="{{$pelicula->descripcion}}">
            <input name="director" class="form-control mb-3" type="text" value="{{$pelicula->director}}">
            <input name="genero" class="form-control mb-3" type="text" value="{{$pelicula->genero}}">
            <div class="form-group mb-3">
                <label>Fecha de estreno</label>
                <input type="date" name="fecha_estreno" class="form-control" value="{{ $pelicula->fecha_estreno }}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Actualizar</button>
        </form>
    </div>
</div>
@endsection