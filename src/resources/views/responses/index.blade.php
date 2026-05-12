<h1>RESPONSES</h1>

@if ($responses->isEmpty())
<p>Aucune réponse disponible.</p>
@else
<ul>
    @foreach ($responses as $response)
    <li>
        <strong>{{ $response->response }}</strong>
        <strong>{{ $response->is_correct }}</strong>
        <strong>{{ $response->question_id }}</strong>
    </li>
    @endforeach
</ul>
@endif

<p><a href="/">Retour à l'accueil</a></p>
<p><a href="/questions">Voir les questions</a></p>
<p><a href="/quizzes">Voir les quizz</a></p>
<p><a href="/users">Voir les utilisateurs</a></p>