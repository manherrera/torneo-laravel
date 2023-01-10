<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 3</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 3</h2>
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
            @foreach ($ronda3peleas as $ronda3pelea)
                <tr>
                    
                    <td>{{ $ronda3pelea->participante->equipo }}</td>
                    <td>{{ $ronda3pelea->participante->gallo3_anillo }}</td>
                    <td>{{ $ronda3pelea->participante->peso3 }}</td>
                    <td>{{ $ronda3pelea->clonparticipante->equipo }}</td>
                    <td>{{ $ronda3pelea->clonparticipante->gallo3_anillo }}</td>
                    <td>{{ $ronda3pelea->clonparticipante->peso3 }}</td>

                    <td>{{ $ronda3pelea->participante->peso3 - $ronda3pelea->clonparticipante->peso3  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>