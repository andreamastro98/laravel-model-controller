<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Model-controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center mb-5">Laravel-Model-controller</h1>

    <div class="container d-flex flex-wrap">
        @foreach ($movies as $elem)
            <div class="card m-2" style="width: 18rem;">
              <div class="card-body">
                <h4 class="card-title">Titolo: {{ $elem['title'] }}</h4>
                <h4 class="card-title">Titolo originale:{{ $elem['original_title'] }}</h4>
                <p class="card-text">Nazionalitá: {{ $elem['nationality'] }}</p>
                <p class="card-text">Data: {{ $elem['date'] }}</p>
                <p class="card-text">Voto: {{ $elem['vote'] }}</p>
              </div>
            </div>
        @endforeach
    </div>
    
</body>
</html>