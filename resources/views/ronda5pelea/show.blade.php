@extends('layouts.app')

@section('template_title')
    {{ $ronda5pelea->name ?? 'Show Ronda5Pelea' }}
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Peleas</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('participantes.index') }}">Peleas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ronda 5</li>
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
                            <span class="card-title">Detalles de la Pelea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ronda5peleas.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $ronda5pelea->participante->equipo }}</h3>
                                    <p class="card-text">Anillo: {{ $ronda5pelea->participante->gallo5_anillo }}</p>
                                    <p class="card-text">Peso: {{ $ronda5pelea->participante->peso5 }}</p>
                                    <p class="card-text">Puntos: {{ $ronda5pelea->participante->puntos5 }}</p>
                                    <br>
                                    <form action="{{ route('puntajes.destroy',$ronda5pelea->participante_id) }}" method="POST">
                                        <a class="btn btn-sm btn-success" href="{{ route('puntajes.edit',$ronda5pelea->participante_id) }}"><i class="fa fa-fw fa-edit"></i> Definir</a>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $ronda5pelea->clonparticipante->equipo }}</h3>
                                    <p class="card-text">Anillo: {{ $ronda5pelea->clonparticipante->gallo5_anillo }}</p>
                                    <p class="card-text">Peso: {{ $ronda5pelea->clonparticipante->peso5 }}</p>
                                    <p class="card-text">Puntos: {{ $ronda5pelea->clonparticipante->puntos5 }}</p>
                                    <br>
                                    <form action="{{ route('puntajes.destroy',$ronda5pelea->clonparticipante_id) }}" method="POST">
                                        <a class="btn btn-sm btn-success" href="{{ route('puntajes.edit',$ronda5pelea->clonparticipante_id) }}"><i class="fa fa-fw fa-edit"></i> Definir</a>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</div>
