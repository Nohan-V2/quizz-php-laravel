<h1>QUESTIONS</h1>

@if ($questions->isEmpty())
<p>Aucune question disponible.</p>
@else
<ul>
    @foreach ($questions as $question)
    <li>
        <strong>{{ $question->question }}</strong>
        <strong>{{ $question->answer }}</strong>
    </li>
    @endforeach
</ul>
@endif

<p><a href="/">Retour à l'accueil</a></p>
<p><a href="/quizzes">Voir les quizz</a></p>
<p><a href="/users">Voir les utilisateurs</a></p>