@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">

                <!--Podio 1-->
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio de Gallos 1</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('gallos1.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead">
                                <tr>
                                    
                                    <th>No Anillo</th>
                                    <th>Peso</th>
                                    <th>Puntos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($g1llos as $g1llo)
                                    <tr>
                                        
                                        <td>{{ $g1llo->gallo1_anillo }}</td>
                                        <td>{{ $g1llo->peso1 }}</td>
                                        <td>{{ $g1llo->puntos1 }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>

                <!--Podio 2-->

                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio de Gallos 2</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('gallos2.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead">
                                <tr>
                                    
                                    <th>No Anillo</th>
                                    <th>Peso</th>
                                    <th>Puntos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($g2llos as $g2llo)
                                    <tr>
                                        
                                        <td>{{ $g2llo->gallo2_anillo }}</td>
                                        <td>{{ $g2llo->peso2 }}</td>
                                        <td>{{ $g2llo->puntos2 }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>

                <!--Podio 3-->

                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio de Gallos 3</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('gallos3.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead">
                                <tr>
                                    
                                    <th>No Anillo</th>
                                    <th>Peso</th>
                                    <th>Puntos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($g3llos as $g3llo)
                                    <tr>
                                        
                                        <td>{{ $g3llo->gallo3_anillo }}</td>
                                        <td>{{ $g3llo->peso3 }}</td>
                                        <td>{{ $g3llo->puntos3 }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>

                <!--Podio 4-->

                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio de Gallos 4</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('gallos4.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead">
                                <tr>
                                    
                                    <th>No Anillo</th>
                                    <th>Peso</th>
                                    <th>Puntos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($g4llos as $g4llo)
                                    <tr>
                                        
                                        <td>{{ $g4llo->gallo4_anillo }}</td>
                                        <td>{{ $g4llo->peso4 }}</td>
                                        <td>{{ $g4llo->puntos4 }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>

                <!--Podio 5-->

                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio de Gallos 5</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('gallos5.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead">
                                <tr>
                                    
                                    <th>No Anillo</th>
                                    <th>Peso</th>
                                    <th>Puntos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($g5llos as $g5llo)
                                    <tr>
                                        
                                        <td>{{ $g5llo->gallo5_anillo }}</td>
                                        <td>{{ $g5llo->peso5 }}</td>
                                        <td>{{ $g5llo->puntos5 }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4">

        <div class="row mt">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Podio Equipos</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('equipos.index') }}" class="btn btn-sm btn-primary">Ver Todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Nombre</th>

                                    <th>Puntaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participantes as $participante)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $participante->equipo }}</td>

                                        <td><i class="fas fa-arrow-up text-success mr-3"></i>
                                            {{ $participante->puntaje_total }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush