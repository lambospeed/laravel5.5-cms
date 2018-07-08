<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;

class BlogController extends ApplicationController
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        $articles = session('current_lang')->articles()->published()->orderBy('published_at', 'desc')->paginate(6);
        $categories = session('current_lang')->categories()->paginate(4);
        return view('application.blog.index', compact('articles', 'categories'));
    }
}
