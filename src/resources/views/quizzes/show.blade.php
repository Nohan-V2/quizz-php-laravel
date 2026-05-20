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
                <div>
                    <p>Question {{ $question->position }} of {{ $quizz->questions->count() }}</p>
                    <h2>{{ $question->question }}</h2>
                </div>
                <form action="" method="POST">
                    @foreach ($question->answers as $answer)
                    <input type="radio" name="answer" value="{{ $answer->id }}" id="answer-{{ $answer->id }}">
                    {{ $answer->answer }}
                    </input>
                    @endforeach
                    <button type="submit">Submit</button>
                </form>
            </article>
            @endforeach
        </section>
        @endif

        <p><a href="{{ route('quizzes') }}">Back to quizzes</a></p>
    </main>
</body>

</html>