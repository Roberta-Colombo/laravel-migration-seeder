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
            <h2 class="title-cancelled">Treni soppressi:</h2>
    
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
                    <th>Cancellato</th>
                  </tr>
                </thead>
    
                <tbody>
                    @foreach ($cancelledTrains as $cancelledTrain)
                    <tr>
                        <td>{{ $cancelledTrain->azienda }}</td>
                        <td>{{ $cancelledTrain->stazione_di_partenza }}</td>
                        <td>{{ $cancelledTrain->stazione_di_arrivo }}</td>
                        <td>{{ $cancelledTrain->orario_partenza }}</td>
                        <td>{{ $cancelledTrain->orario_arrivo }}</td>
                        <td>{{ $cancelledTrain->codice_treno }}</td>
                        <td>{{ $cancelledTrain->nr_carrozze }}</td>
                        <td>{{ $cancelledTrain->cancellato == false ? 'No' : 'Sì' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
