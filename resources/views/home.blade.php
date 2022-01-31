<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    <h1>Comics currently available</h1>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comic', $comic -> id) }}">{{ $comic -> title }}</a> : {{ $comic -> author }} <a href="{{ route('edit', $comic -> id) }}">Edit</a></li>
        @endforeach
    </ul>
    <h2><a href="{{ route('create') }}">Add a Comic</a></h2>
</body>
</html>