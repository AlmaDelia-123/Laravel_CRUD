@extends('plantilla')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Mi página de inicio</h1>
            <br>

            <h2>Los más buscados</h2>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/belleza_verdadera.png') }}" alt="Belleza Verdadera"
                        class="img-fluid rounded">
                    <p class="mt-2">Belleza Verdadera</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/mi_adorable_demonio.png') }}" alt="Mi Adorable Demonio"
                        class="img-fluid rounded">
                    <p class="mt-2">Mi Adorable Demonio</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/propuesta_laboral.png') }}" alt="Propuesta Laboral"
                        class="img-fluid rounded">
                    <p class="mt-2">Propuesta Laboral</p>
                </div>
            </div>
            <br>

            <h2>Favoritos del público</h2>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/spy_family.png') }}" alt="Spy Family" class="img-fluid rounded">
                    <p class="mt-2">Spy Family</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/demon_slayer.png') }}" alt="Demon Slayer" class="img-fluid rounded">
                    <p class="mt-2">Demon Slayer</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/si_la_vida_te_da_mandarinas.png') }}" alt="Si la vida te da mandarinas"
                        class="img-fluid rounded">
                    <p class="mt-2">Si la vida te da mandarinas</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection