@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
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
                    <li class="breadcrumb-item"><a href="{{ route('gallos.index') }}">Gallos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Participantes</li>
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
                                <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Atrás</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <strong>No. de Equipo:</strong>
                                {{ $equipo->id }}
                            </div>

                            <div class="form-group">
                               <strong>Equipo:</strong>
                                {{ $equipo->name }}
                            </div>

                            <div class="form-group">
                               <strong>Puntaje Total:</strong>
                                {{ $equipo->puntaje }}
                            </div> 

                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Partido</th>
                                        <th>Peso</th>
                                        <th>Anillo</th>
                                        <th>Puntos</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gallos as $gallos)
                                    
                                        <tr>

                                            <td>{{ ++$i }}</td>
                                            <td>{{ $gallos->partido }}</td>
                                            <td>{{ $gallos->peso }}</td>
                                            <td>{{ $gallos->id }}</td>
                                            <td><i class="fas fa-arrow-up text-success mr-3"></i>
                                                {{ $gallos->puntos }}
                                            </td>
                                            <td>{{ $gallos->estado }}</td>
                                            <td>
                                                <form action="{{ route('gallos.destroy',$gallos->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('gallos.show',$gallos->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('gallos.edit',$gallos->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</div>