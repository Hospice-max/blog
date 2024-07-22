<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Afficher les ressources
    public function index()
    {

        $articles = [
            // [
            //     "title" => "Titre article 1",
            //     "body" => "Contenu de l'article 1",
            // ],
            // [
            //     "title" => "Titre article 2",
            //     "body" => "Contenu de l'article 2",
            // ],
            // [
            //     "title" => "Titre article 3",
            //     "body" => "Contenu de l'article 3",
            // ]
        ];
        return view('layouts.articles', ['articles'=> $articles]);
    }

    // Créer une ressource
    public function create($id)
    {

    }

    // Stocker une ressource
    public function store(Request $request)
    {

    }

    // Afficher une ressource

    public function show($id)
    {

    }

    // Modifier une ressource
    public function edit($id)
    {

    }

    // Mettre à jour une ressource
    public function update(Request $request, $id)
    {

    }

    // Supprimer une ressource spécifique
    public function destroy($id)
    {

    }
}
