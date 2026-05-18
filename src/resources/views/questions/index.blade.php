<h1>QUESTIONS</h1>

@if ($questions->isEmpty())
<p>Aucune question disponible.</p>
@else
<ul>
    @foreach ($questions as $question)
    <li>
        <strong>{{ $question->question }}</strong>
        <span> — position {{ $question->position }} (quiz #{{ $question->quizz_id }})</span>
    </li>
    @endforeach
</ul>
@endif

<p><a href="/">Retour à l'accueil</a></p>
<p><a href="/quizzes">Voir les quizz</a></p>
<p><a href="/users">Voir les utilisateurs</a></p>
<p><a href="/responses">Voir les réponses</a></p>