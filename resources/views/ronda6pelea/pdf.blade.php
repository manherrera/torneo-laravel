<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Ronda 6</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Ronda 6 (Semifinales)</h2>
    <table class="table table-striped table-hover">
        <thead align="center" class="thead">
            <tr>
                
                <th>Peleador 1</th>
                <th>Peleador 2</th>

            </tr>
        </thead>
        <tbody align="center">
            @foreach ($ronda6peleas as $ronda6pelea)
                <tr>
                    
                    <td>{{ $ronda6pelea->peleador1 }}</td>
                    <td>{{ $ronda6pelea->peleador2 }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>