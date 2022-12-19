<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <h2>Treni in partenza: **</h2>
            <h4>** <a href="{{ route('cancelled')}}">cliccare qui</a> per visualizzare i treni soppressi</h4>
    
            <table>
                <thead>
                  <tr>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice treno</th>
                    <th>Nr. carrozze</th>
                    <th>In orario</th>
                    <th>Cancellato</th>
                  </tr>
                </thead>
    
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->nr_carrozze }}</td>
                        <td>{{ $train->in_orario == true ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancellato == false ? 'No' : 'Sì' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
