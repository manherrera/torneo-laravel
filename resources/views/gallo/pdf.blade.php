<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Lista_de_gallos</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Lista de Gallos</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Equipo</th>
                <th>Partido</th>
                <th>Peso</th>
                <th>Anillo</th>
                <th>Puntos</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gallos as $gallo)
                <tr>
                    
                    <td>{{ $gallo->equipo->name }}</td>
                    <td>{{ $gallo->partido }}</td>
                    <td>{{ $gallo->peso }}</td>
                    <td>{{ $gallo->anillo }}</td>
                    <td>{{ $gallo->puntos }}</td>
                    <td>{{ $gallo->estado }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>