<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateArticleRequest;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\Storage;
class ArticleController extends Controller
{
    // Afficher les ressources
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->get();
        return view('layouts.articles', ['articles' => $articles]);
    }

    // Créer une ressource
    public function create()
    {
        return view('articles.create');
    }

    // Stocker une ressource
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request
                ->file('image')
                ->store('img','public');
            $validated['image'] = $path;
        }

        $validated['user_id'] =1;
        // Envoyer l'article dans la BDD
        Article::create($validated);


        return redirect()->route('articles.index')
        ->with('success','Article créé avec succès');
    }

    // Afficher une ressource

    public function show($id)
    {
        $article = Article::with('comments.user')->where("id", $id)->first();
        return view('articles.show', ['article' => $article]);
    }

    // Modifier une ressource
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    // Mettre à jour une ressource
    public function update(updateArticleRequest $request, Article $article)
    {
        $validated = $request->validated();	

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($article->image) {
                storage::disk('public')->delete($article->image);
            }
            // Stocker la nouvelle image 
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }else {
            // Garde l'image existante
            // si aucune nouvelle image n'est téléchargé
            $validated['image'] = $article->image;
        }
        // Mettre à jour l'article
        $article->update($validated);
        // Rediriger vers la page de l'article

        // Un message de succès
        return redirect()->route('articles.store' , $article->id)->with('succes', 'Article modifié avec succès');
    }

    // Supprimer une ressource spécifique
    public function destroy(Article $article)
    {
        // Vérifier si l'article a une image 
        // et la supprimer
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        // Supprimer l'article de la BDD
        $article->delete();
        // Rediriger vers la listet des articles
        // avec un messagee de succès
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès');
    }
}
