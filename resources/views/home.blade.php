<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Homepage</h1>

    <h2>Movies list:</h2>

    @foreach ($movies as $movie)
        <h2>
            <a href="{{ route('movie', ['id' => $movie->id]) }}">
                {{ $movie->title }}
            </a>
        </h2>
    @endforeach
</body>
</html>