<?php

namespace App\Http\Controllers\Application;

use App\Article;
use App\Base\Controllers\ApplicationController;

class ArticleController extends ApplicationController
{
    /**
     * Show the article.
     *
     * @param Article $article
     * @return Response
     */
    public function index(Article $article)
    {
        $articles = session('current_lang')->articles()->published()->orderBy('published_at', 'desc')->paginate(3);
        return view('application.article.index', compact('article', 'articles'));
    }
}
