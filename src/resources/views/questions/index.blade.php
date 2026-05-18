<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        <h1>Questions</h1>
        @if ($questions->isEmpty())
        <p>No questions found.</p>
        @else
        <ul>
            @foreach ($questions as $question)
            <li>{{ $question->position }}. {{ $question->question }} (Quiz: {{ $question->quizz->title }})</li>
            @endforeach
        </ul>
        @endif

        <p><a href="{{ route('quizzes') }}">Back to quizzes</a></p>
    </main>
</body>

</html>