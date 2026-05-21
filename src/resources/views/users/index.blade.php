<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <main>
        <h1>Users</h1>

        @if ($users->isEmpty())
        <p>No users registered.</p>
        @else
        <ul>
            @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
        @endif

        <p><a href="{{ route('quizzes') }}">Back to quizzes</a></p>
    </main>
</body>

</html>