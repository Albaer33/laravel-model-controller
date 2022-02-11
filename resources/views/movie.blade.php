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

    <main class="details">
        <h1>Film details:</h1>

        <div>Title: {{ $movie->title }}</div>
        <div>Original Title: {{ $movie->original_title }}</div>
        <div>Original Title: {{ $movie->nationality }}</div>
        <div>Release date: {{ $movie->date }}</div>
        <div>Vote: {{ $movie->vote }}</div>
    </main>
</body>
</html>