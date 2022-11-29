@extends('layouts.app')

@section('template_title')
    Ronda5Pelea
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Quinta Ronda (Cuartos de Final)') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('ronda5pelea.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    {{ __('PDF') }}
                                    </a>
                                &nbsp;
                                    <a href="{{ route('ronda5peleas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Pelea') }}
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead align="center" class="thead">
                                        <tr>
                                            <th>No de Pelea</th>
                                            
                                            <th>Peleador 1</th>
                                            <th>Peleador 2</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        @foreach ($ronda5peleas as $ronda5pelea)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $ronda5pelea->peleador1 }}</td>
                                                <td>{{ $ronda5pelea->peleador2 }}</td>

                                                <td>
                                                    <form action="{{ route('ronda5peleas.destroy',$ronda5pelea->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('ronda5peleas.show',$ronda5pelea->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('ronda5peleas.edit',$ronda5pelea->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                    {!! $ronda5peleas->links() !!}
                </div>
            </div>
        </div>
    @endsection
</div>
