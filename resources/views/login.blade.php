@extends('plantilla')
@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 auth-card">
            <form method="POST" action="/login" >
                @csrf
                <h2>Iniciar sesión</h2>
                <div class="form-group mb-3">
                    <label>Usuario</label>
                    <input type="text" name="usuario" placeholder="Usuario" value="{{old('usuario')}}">
                </div>
                <div class="form-group mb-4">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña" >
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button><br>
            </form>
            <div class="text-center mt-3">
                <p>¿Primera vez aquí? <a href="/registro" class="text-danger fw-bold">Regístrate ahora</a></p>
            </div>

           @if($errors->any())
            <div class="alert alert-danger rounder-3">
                <ul class="error-text">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection