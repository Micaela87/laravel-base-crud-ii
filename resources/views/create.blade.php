<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create new Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">

        @method("POST")
        @csrf


        <label for="title">Title: </label><input type="text" name="title"><br>
        <label for="author">Author: </label><input type="text" name="author"><br>
        <label for="release_date">Release date: </label><input type="date" name="release_date"><br>
        <label for="pages">Nr pages: </label><input type="number" name="pages" max="255"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>