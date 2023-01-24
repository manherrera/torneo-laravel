<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Clasificacion_gallos2</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Gallos 2 | Clasificacion por Puntos: </h2>
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
            @foreach ($g2llos as $g2llo)
                <tr>

                    <td>{{ $g2llo->gallo2_anillo }}</td>
                    <td>{{ $g2llo->partido }}</td>
                    <td>{{ $g2llo->peso2 }}</td>
                    <td>{{ $g2llo->puntos2 }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>