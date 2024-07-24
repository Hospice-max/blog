@extends('layouts.master')

@section('title')
Créer un article
@endsection

@section('contenu')
<form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
    @csrf
    @method('patch')

    @if ($errors->any())
        <p class="alert alert-danger">Il y a des erreurs</p>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titre de l'article</label>

        <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" id="title"
            aria-describedby="emailHelp" value="{{old('title', $article->title)}}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Contenu de l'article </label><br>
        <textarea name="body" placeholder=" Rédigez votre article !!!"
            class="form-control  @error('body') is-invalid @enderror" rows="10"
            id="body">{{old('body', $article->body)}}</textarea>
        @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <div class="mb-3">
            <label for="">Choisir une image pour l'article</label><br>

            @if ($article->image)
                <img src=" {{asset('storage/' . $article->image) }} " alt="Image de l'article" class="img-thumbnail mb-3"
                    width="20O">
            @endif
            
            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>
@endsection