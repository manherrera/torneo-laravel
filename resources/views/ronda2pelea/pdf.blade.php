<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 2</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 2</h2>
    <table class="table table-striped table-hover">
        <thead align="center" class="thead">
            <tr>
                
                <th>Peleador 1</th>
                <th>Peleador 2</th>

                <th></th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($ronda2peleas as $ronda2pelea)
                <tr>
                    
                    <td>{{ $ronda2pelea->peleador1 }}</td>
                    <td>{{ $ronda2pelea->peleador2 }}</td>

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
</body>

</html>