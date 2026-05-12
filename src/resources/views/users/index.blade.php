<h1>USERS</h1>

@if ($users->isEmpty())
<p>Aucun utilisateur.</p>
@else
<ul>
    @foreach ($users as $user)
    <li>
        <strong>{{ $user->name }}</strong>
    </li>
    @endforeach
</ul>
@endif

<p><a href="/">Retour à l'accueil</a></p>
<p><a href="/quizzes">Voir les quizz</a></p>
<p><a href="/questions">Voir les questions</a></p>
<p><a href="/responses">Voir les réponses</a></p>