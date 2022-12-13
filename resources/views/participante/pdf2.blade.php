<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Lista_de_participantes</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <h2>Lista de Gallos</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                
                <th>Equipo</th>

                <th>Gallo 1</th>
                <th>Peso </th>

                <th>Gallo 2</th>
                <th>Peso</th>

                <th>Gallo 3</th>
                <th>Peso</th>

                <th>Gallo 4</th>
                <th>Peso</th>

                <th>Gallo 5</th>
                <th>Peso</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($participantes as $participante)
                <tr>
                    
                    <td>{{ $participante->equipo }}</td>

                    <td>{{ $participante->gallo1_anillo }}</td>
                    <td>{{ $participante->peso1 }}</td>

                    <td>{{ $participante->gallo2_anillo }}</td>
                    <td>{{ $participante->peso2 }}</td>

                    <td>{{ $participante->gallo3_anillo }}</td>
                    <td>{{ $participante->peso3 }}</td>

                    <td>{{ $participante->gallo4_anillo }}</td>
                    <td>{{ $participante->peso4 }}</td>

                    <td>{{ $participante->gallo5_anillo }}</td>
                    <td>{{ $participante->peso5 }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>