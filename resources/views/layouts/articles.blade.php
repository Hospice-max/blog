@extends ('layouts.master')
@section('title')
    Articles
@endsection
@section('contenu')
    @if ($articles)
    @foreach ($articles as  $article)
    <article>
        <h2>{{ $article["title"] }}</h2>
        <p>{{ $article["body"] }}</p>
    </article>
    @endforeach 
    @else
    <p> Oups!!! 😢 Aucun article trouvé</p>
    @endif
    <!-- <pre>{{ dd($articles) }}</pre> -->
@endsection