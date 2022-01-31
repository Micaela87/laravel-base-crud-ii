<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Titolo: {{ $comic -> title }}</p>
    <p>Autore: {{ $comic -> author }}</p>
    <p>Nr Pagine: {{ $comic -> pages }}</p>
    <p>Data di pubblicazione: {{ $comic -> release_date }}</p>
</body>
</html>