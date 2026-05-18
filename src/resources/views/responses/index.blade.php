<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responses</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        <h1>Responses</h1>

        @if ($responses->isEmpty())
        <p>No answers found.</p>
        @else
        <ul>
            @foreach ($responses as $response)
            <li>
                {{ $response->answer }}
                @if ($response->question)
                <span>— Question: {{ $response->question->question }}</span>
                @endif
            </li>
            @endforeach
        </ul>
        @endif

        <p><a href="{{ route('quizzes') }}">Back to quizzes</a></p>
    </main>
</body>

</html>