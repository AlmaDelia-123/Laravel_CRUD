@extends('plantilla')
@section('contenido')
<div class="row justify-content-center mt-5">
    <div class="col-10">
        <h1 class="text-center">Editar película</h1>
        <form action="{{ route('catalogo.actualizar', $pelicula->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ $pelicula->titulo }}" required>
            </div>

            <div class="form-group mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" required>{{ $pelicula->descripcion }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label>Género</label>
                <input type="text" name="genero" class="form-control" value="{{ $pelicula->genero }}" required>
            </div>

            <div class="form-group mb-3">
                <label>Director</label>
                <input type="text" name="director" class="form-control" value="{{ $pelicula->director }}" required>
            </div>

            <div class="form-group mb-3">
                <label>Fecha de estreno</label>
                <input type="date" name="fecha_estreno" class="form-control" value="{{ $pelicula->fecha_estreno }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
