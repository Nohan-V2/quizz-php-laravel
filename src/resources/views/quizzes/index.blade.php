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
        <div>
            <h1>Welcome to the <b>Frontend Quiz!</b></h1>
            <p>Pick a subject to get started.</p>
        </div>

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
    </main>
</body>

</html>