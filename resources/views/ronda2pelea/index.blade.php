@extends('layouts.app')

@section('template_title')
    Ronda2Pelea
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
                        <li class="breadcrumb-item active" aria-current="page">Ronda 2</li>
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
                                    {{ __('Segunda Ronda') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('ronda2pelea.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    <i class="fas fa-bolt"></i>{{ __(' Match') }}
                                    </a>
                                &nbsp;
                                    <a href="{{ route('ronda2pelea.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    <i class="fas fa-file-pdf"></i>{{ __(' PDF') }}
                                    </a>
                                &nbsp;
                                    <a href="{{ route('ronda2peleas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus"></i>{{ __(' ADD') }}
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
                                    <thead class="thead">
                                        <tr>
                                            <th>No de Pelea</th>
                                                
                                                <th>Equipo</th>
                                                <th>Peleador 1</th>
                                                <th>Peso</th>
                                                <th>Equipo</th>
                                                <th>Peleador 2</th>
                                                <th>Peso</th>

                                                <th>DIF Peso</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ronda2peleas as $ronda2pelea)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ $ronda2pelea->participante->equipo }}</td>
                                                    <td>{{ $ronda2pelea->participante->gallo2_anillo }}</td>
                                                    <td>{{ $ronda2pelea->participante->peso2 }}</td>
                                                    <td>{{ $ronda2pelea->clonparticipante->equipo }}</td>
                                                    <td>{{ $ronda2pelea->clonparticipante->gallo2_anillo }}</td>
                                                    <td>{{ $ronda2pelea->clonparticipante->peso2 }}</td>

                                                    <td>{{ $ronda2pelea->participante->peso2 - $ronda2pelea->clonparticipante->peso2  }}</td>

                                                <td>
                                                    <form action="{{ route('ronda2peleas.destroy',$ronda2pelea->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('ronda2peleas.show',$ronda2pelea->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('ronda2peleas.edit',$ronda2pelea->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                    {!! $ronda2peleas->links() !!}
                </div>
            </div>
        </div>
    @endsection
</div>
