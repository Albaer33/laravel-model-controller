<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <h1>Homepage</h1>

        <h2>Movies list:</h2>
    
        @foreach ($movies as $movie)
            <h2 class="film-box">
                <a href="{{ route('movie', ['id' => $movie->id]) }}">
                    {{ $movie->title }}
                </a>
            </h2>
        @endforeach
    </main>
</body>
</html>