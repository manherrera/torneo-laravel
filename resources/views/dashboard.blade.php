@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
        <div class="row mt">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Puntaje General</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Equipos</th>
                                    <th scope="col">No. de Gallos</th>
                                    <th scope="col">Puntos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Hernandez
                                    </th>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 40
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Jimenez
                                    </th>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 80
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Mendoza
                                    </th>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 20
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Gutierrez
                                    </th>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 90
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Estrada
                                    </th>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 0
                                    </td>
                                </tr>
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