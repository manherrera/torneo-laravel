@extends('layouts.app')

@section('template_title')
    Participante
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
                  <li class="breadcrumb-item active" aria-current="page">Inicio</li>
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
                                    {{ __('Registros') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('participante.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    <i class="fas fa-file-pdf"></i>{{ __(' R4') }}
                                    </a>
                                &nbsp;
                                    <a href="{{ route('participante.pdf2') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    <i class="fas fa-file-pdf"></i>{{ __(' R5') }}
                                    </a>
                                &nbsp;
                                    <a href="{{ route('participantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo') }}
                                    </a>
                                </div>
                            </div>
                            <br>
                            <form class="d-flex" action="{{ route('participantes.index') }}" method="GET">
                                <input class="form-control me-2" type="text" name="busqueda" placeholder="Busqueda" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" value="enviar">Buscar</button>
                            </form>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Equipo</th>

                                            <th>Partido</th>

                                            <th>Gallo 1</th>
                                            <th>Peso </th>

                                            <th>Gallo 2</th>
                                            <th>Peso</th>

                                            <th>Gallo 3</th>
                                            <th>Peso</th>

                                            <th>Gallo 4</th>
                                            <th>Peso</th>

                                            <th>Gallo 5</th>
                                            <th>Peso</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participantes as $participante)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $participante->equipo }}</td>
                                                <td>{{ $participante->partido }}</td>
                                                <td>{{ $participante->gallo1_anillo }}</td>
                                                <td>{{ $participante->peso1 }}</td>

                                                <td>{{ $participante->gallo2_anillo }}</td>
                                                <td>{{ $participante->peso2 }}</td>

                                                <td>{{ $participante->gallo3_anillo }}</td>
                                                <td>{{ $participante->peso3 }}</td>

                                                <td>{{ $participante->gallo4_anillo }}</td>
                                                <td>{{ $participante->peso4 }}</td>

                                                <td>{{ $participante->gallo5_anillo }}</td>
                                                <td>{{ $participante->peso5 }}</td>

                                                <td>
                                                    <form action="{{ route('participantes.destroy',$participante->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('participantes.show',$participante->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('participantes.edit',$participante->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                    {!! $participantes->links() !!}
                </div>
            </div>
        </div>
    @endsection
</div>