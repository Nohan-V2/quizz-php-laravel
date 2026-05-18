<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quizz->title }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        <h1>{{ $quizz->title }}</h1>
        @if ($quizz->questions->isEmpty())
        <p>No questions have been added to this quiz yet.</p>
        @else
        <section>
            @foreach ($quizz->questions as $question)
            <article>
                <h2>{{ $question->position }}. {{ $question->question }}</h2>
                <ul>
                    @foreach ($question->answers as $answer)
                    <li>
                        {{ $answer->answer }}
                        @if ($answer->is_correct)
                        <strong>(Correct)</strong>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </article>
            @endforeach
        </section>
        @endif

        <p><a href="{{ route('quizzes') }}">Back to quizzes</a></p>
    </main>
</body>

</html>