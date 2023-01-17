<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 5</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 5</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Equipo</th>
                <th>Peleador 1</th>
                <th>Peso</th>
                <th>Equipo</th>
                <th>Peleador 2</th>
                <th>Peso</th>

                <th>DIF Peso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ronda5peleas as $ronda5pelea)
                <tr>
                    
                <td>{{ $ronda5pelea->participante->equipo }}</td>
                <td>{{ $ronda5pelea->participante->gallo5_anillo }}</td>
                <td>{{ $ronda5pelea->participante->peso5 }}</td>
                <td>{{ $ronda5pelea->clonparticipante->equipo }}</td>
                <td>{{ $ronda5pelea->clonparticipante->gallo5_anillo }}</td>
                <td>{{ $ronda5pelea->clonparticipante->peso5 }}</td>

                <td>{{ $ronda5pelea->participante->peso5 - $ronda5pelea->clonparticipante->peso5  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>