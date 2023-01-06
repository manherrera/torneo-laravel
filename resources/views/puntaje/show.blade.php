@extends('layouts.app')

@section('template_title')
    {{ $puntaje->name ?? 'Show Puntaje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Puntaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('puntajes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $puntaje->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos1:</strong>
                            {{ $puntaje->puntos1 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos2:</strong>
                            {{ $puntaje->puntos2 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos3:</strong>
                            {{ $puntaje->puntos3 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos4:</strong>
                            {{ $puntaje->puntos4 }}
                        </div>
                        <div class="form-group">
                            <strong>Puntos5:</strong>
                            {{ $puntaje->puntos5 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
