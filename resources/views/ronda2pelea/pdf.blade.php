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
            @foreach ($ronda2peleas as $ronda2pelea)
                <tr>
                    
                <td>{{ $ronda2pelea->participante->equipo }}</td>
                <td>{{ $ronda2pelea->participante->gallo2_anillo }}</td>
                <td>{{ $ronda2pelea->participante->peso2 }}</td>
                <td>{{ $ronda2pelea->clonparticipante->equipo }}</td>
                <td>{{ $ronda2pelea->clonparticipante->gallo2_anillo }}</td>
                <td>{{ $ronda2pelea->clonparticipante->peso2 }}</td>

                <td>{{ $ronda2pelea->participante->peso2 - $ronda2pelea->clonparticipante->peso2  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>