<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel from scratch</title>
</head>

<body>
    <ul>
        @foreach ($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach;
    </ul>
</body>

</html>