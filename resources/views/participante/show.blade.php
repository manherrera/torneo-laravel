@extends('layouts.app')

@section('template_title')
    {{ $participante->name ?? 'Show Participante' }}
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Gallos</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('participantes.index') }}">Participantes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Consulta</li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </div>
        <br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('participantes.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Equipo:</strong>
                            {{ $participante->equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Gallo1 Anillo:</strong>
                            {{ $participante->gallo1_anillo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso1:</strong>
                            {{ $participante->peso1 }}
                        </div>
                        <div class="form-group">
                            <strong>Estado1:</strong>
                            {{ $participante->estado1 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos1:</strong>
                            {{ $participante->puntos1 }}
                        </div>
                        <div class="form-group">
                            <strong>Gallo2 Anillo:</strong>
                            {{ $participante->gallo2_anillo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso2:</strong>
                            {{ $participante->peso2 }}
                        </div>
                        <div class="form-group">
                            <strong>Estado2:</strong>
                            {{ $participante->estado2 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos2:</strong>
                            {{ $participante->puntos2 }}
                        </div>
                        <div class="form-group">
                            <strong>Gallo3 Anillo:</strong>
                            {{ $participante->gallo3_anillo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso3:</strong>
                            {{ $participante->peso3 }}
                        </div>
                        <div class="form-group">
                            <strong>Estado3:</strong>
                            {{ $participante->estado3 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos3:</strong>
                            {{ $participante->puntos3 }}
                        </div>
                        <div class="form-group">
                            <strong>Gallo4 Anillo:</strong>
                            {{ $participante->gallo4_anillo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso4:</strong>
                            {{ $participante->peso4 }}
                        </div>
                        <div class="form-group">
                            <strong>Estado4:</strong>
                            {{ $participante->estado4 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos4:</strong>
                            {{ $participante->puntos4 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntaje Total:</strong>
                            {{ $participante->puntaje_total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</div>