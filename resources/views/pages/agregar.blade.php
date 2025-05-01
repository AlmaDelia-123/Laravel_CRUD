@extends('plantilla')
@section('contenido')
<div class="row justify-content-center mt-5">
    <div class="col-10">
        <h1 class="text-center">Agregar nueva película</h1>
        <form action="{{ route('catalogo.guardar') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label>Género</label>
                <input type="text" name="genero" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Director</label>
                <input type="text" name="director" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Fecha de estreno</label>
                <input type="date" name="fecha_estreno" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar película</button>
        </form>
    </div>
</div>
@endsection
