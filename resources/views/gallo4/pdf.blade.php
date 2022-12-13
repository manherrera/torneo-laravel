<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Clasificacion_gallos4</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Gallos 4 | Clasificacion por Puntos: </h2>
    <table class="table table-striped table-hover">
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
</body>

</html>