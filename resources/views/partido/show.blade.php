@extends('layouts.app')

@section('template_title')
    {{ $partido->name ?? 'Show Partido' }}
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
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Gallos</a></li>
                    <li class="breadcrumb-item"><a href="#">Partidos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ver</li>
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
                                <span class="card-title">Visualizar Partido</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('partidos.index') }}"> Atrás</a>
                            </div>
                        </div>

                        <div class="card-body">
                            
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $partido->name }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</div>
