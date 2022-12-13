<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Clasificacion_equipos</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Equipos | Clasificacion por Puntos: </h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>

                <th>Nombre</th>
                <th>Puntaje</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->equipo }}</td>
                <td>{{ $equipo->puntaje_total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>