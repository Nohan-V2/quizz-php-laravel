<h1>QUIZZES</h1>

<!-- @if ($quizzes->isEmpty())
<p>Aucun quizz disponible.</p>
@else
<ul>
    @foreach ($quizzes as $quizz)
    <li>
        @if ($quizz->logo_url)
        <img src="{{ $quizz->logo_url }}" alt="Logo {{ $quizz->title }}" style="max-width: 120px;">
        @endif
        <strong>{{ $quizz->title }}</strong>
    </li>
    @endforeach
</ul>
@endif -->

<!-- <p><a href="/">Retour à l'accueil</a></p>
<p><a href="/questions">Voir les questions</a></p>
<p><a href="/users">Voir les utilisateurs</a></p> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="welcome-page-wrapper">
        <div class="title-welcome-wrapper">
            <h1 class="welcome">Welcome to the <br><span>Fronted Quiz!</span></h1>
            <p>Pick a subject to get started.</p>
        </div>
        <div class="link-wrapper">
            <ul>
                <li><a href="quizzes?id=1">HTML</a></li>
                <li><a href="quizzes?id=2">CSS</a></li>
                <li><a href="quizzes?id=3">Javascript</a></li>
                <li><a href="quizzes?id=4">Accessibility</a></li>
            </ul>
        </div>
    </div>
</body>

</html>