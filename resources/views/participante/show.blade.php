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
                    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
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
                            <span class="card-title"><strong>Detalles de:</strong> {{ $participante->equipo }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('participantes.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>

                                        <th>Datos</th>

                                        <th>Gallo 1</th>

                                        <th>Gallo 2</th>

                                        <th>Gallo 3</th>

                                        <th>Gallo 4</th>

                                        <th>Gallo 5</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>

                                            <td>Anillo:</td>
                                            <td>{{ $participante->gallo1_anillo }}</td>
                                            <td>{{ $participante->gallo2_anillo }}</td>
                                            <td>{{ $participante->gallo3_anillo }}</td>
                                            <td>{{ $participante->gallo4_anillo }}</td>
                                            <td>{{ $participante->gallo5_anillo }}</td>

                                        </tr>

                                        <tr>

                                            <td>Peso:</td>
                                            <td>{{ $participante->peso1 }}</td>
                                            <td>{{ $participante->peso2 }}</td>
                                            <td>{{ $participante->peso3 }}</td>
                                            <td>{{ $participante->peso4 }}</td>
                                            <td>{{ $participante->peso5 }}</td>

                                        </tr>

                                        <tr>

                                            <td>Puntos:</td>
                                            <td>{{ $participante->puntos1 }}</td>
                                            <td>{{ $participante->puntos2 }}</td>
                                            <td>{{ $participante->puntos3 }}</td>
                                            <td>{{ $participante->puntos4 }}</td>
                                            <td>{{ $participante->puntos5 }}</td>

                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Puntaje Total:</strong>
                            {{ $participante->puntos1 + $participante->puntos2 + $participante->puntos3 + $participante->puntos4 + $participante->puntos5 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</div>