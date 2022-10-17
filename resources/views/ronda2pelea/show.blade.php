@extends('layouts.app')

@section('template_title')
    {{ $ronda2pelea->name ?? 'Show Ronda2Pelea' }}
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
                        <li class="breadcrumb-item"><a href="{{ route('gallos.index') }}">Peleas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ronda 1</li>
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
                            <a class="btn btn-primary" href="{{ route('ronda2peleas.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Peleador 1 (Anillo):</strong>
                            {{ $ronda2pelea->peleador1 }}
                        </div>
                        <div class="form-group">
                            <strong>Peleador 2 (Anillo):</strong>
                            {{ $ronda2pelea->peleador2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</div>
