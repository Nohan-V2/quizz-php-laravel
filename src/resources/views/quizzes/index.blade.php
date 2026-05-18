<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        <header>
            <h1>Available Quizzes</h1>
        </header>

        @if ($quizzes->isEmpty())
        <p>No quizzes available yet.</p>
        @else
        <ul>
            @foreach ($quizzes as $quizz)
            <li>
                <a href="{{ route('quizzes.show', ['id' => $quizz->id]) }}">{{ $quizz->title }}</a>
            </li>
            @endforeach
        </ul>
        @endif

        <nav>
            <a href="{{ route('questions') }}">Voir les questions</a> |
            <a href="{{ route('users') }}">Voir les utilisateurs</a> |
            <a href="{{ route('responses') }}">Voir les réponses</a>
        </nav>
    </main>
</body>

</html>