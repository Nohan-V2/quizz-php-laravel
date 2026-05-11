<h1>QUIZZES</h1>

@if ($quizzes->isEmpty())
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
@endif

<p><a href="/">Retour à l'accueil</a></p>
<p><a href="/questions">Voir les questions</a></p>
<p><a href="/users">Voir les utilisateurs</a></p>