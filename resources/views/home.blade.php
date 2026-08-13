<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Habit Manager</title>
</head>

<body>
    <h1>
        Welcome, to the Habit Manager
    </h1>
    <hr>
    <p>Olá, {{ $nome }}! Aqui estão seus hábitos:</p>
    <ul>
        @foreach ($habitos as $habito)
            <li>{{ $habito }}</li>
        @endforeach
    </ul>

</body>

</html>
