@extends('layouts.app')

@section('template_title')
    Puntaje
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Puntaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('puntajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Equipo Id</th>
										<th>Puntos1</th>
										<th>Puntos2</th>
										<th>Puntos3</th>
										<th>Puntos4</th>
										<th>Puntos5</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($puntajes as $puntaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $puntaje->equipo_id }}</td>
											<td>{{ $puntaje->puntos1 }}</td>
											<td>{{ $puntaje->puntos2 }}</td>
											<td>{{ $puntaje->puntos3 }}</td>
											<td>{{ $puntaje->puntos4 }}</td>
											<td>{{ $puntaje->puntos5 }}</td>

                                            <td>
                                                <form action="{{ route('puntajes.destroy',$puntaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('puntajes.show',$puntaje->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('puntajes.edit',$puntaje->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $puntajes->links() !!}
            </div>
        </div>
    </div>
@endsection
