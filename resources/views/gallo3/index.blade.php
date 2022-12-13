@extends('layouts.app')

@section('template_title')
    Gallos_3
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
                    <li class="breadcrumb-item"><a href="{{ route('participantes.index') }}">Clasificacion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallos 3 | Inicio</li>
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
                                    <strong> Gallos 3 </strong>
                                    {{ __('| Clasificacion por Puntos: ') }}
                                </span>

                            </div>
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
                                            <th>No Anillo</th>
                                            <th>Peso</th>
                                            <th>Puntos</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($g3llos as $g3llo)
                                            <tr>

                                                <td>{{ ++$i }}</td>
                                                <td>{{ $g3llo->gallo3_anillo }}</td>
                                                <td>{{ $g3llo->peso3 }}</td>
                                                <td>{{ $g3llo->puntos3 }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>