<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Clasificacion_gallos5</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Gallos 5 | Clasificacion por Puntos: </h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                
                <th>No Anillo</th>
                <th>Partido</th>
                <th>Peso</th>
                <th>Puntos</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($g5llos as $g5llo)
                <tr>

                    <td>{{ $g5llo->gallo5_anillo }}</td>
                    <td>{{ $g5llo->partido }}</td>
                    <td>{{ $g5llo->peso5 }}</td>
                    <td>{{ $g5llo->puntos5 }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>