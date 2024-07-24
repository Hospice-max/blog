@extends('layouts.master')

@section('title')
Créer un article
@endsection

@section('contenu')
<form method="post" action=" {{ route('articles.store') }} " enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
        <p class="alert alert-danger">Il y a des erreurs</p>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titre de l'article</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" id="title"
            aria-describedby="emailHelp" value="{{old('title')}}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Contenu de l'article </label><br>
        <textarea name="body" placeholder=" Rédigez votre article !!!"
            class="form-control  @error('body') is-invalid @enderror"rows="10"
            id="body"></textarea>
        @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Choisir une image pour l'article</label><br>
        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
    <button type="submit" class=" btn link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><a href="/articles"> Les articles</a></button>
</form>
@endsection