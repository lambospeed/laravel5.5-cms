<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Category;

class CategoryController extends ApplicationController
{
    /**
     * Show the category articles
     *
     * @param Category $category
     * @return Response
     */
    public function index(Category $category)
    {
        $articles = $category->articles()->published()->orderBy('published_at', 'desc')->paginate(6);
        $categories = session('current_lang')->categories()->paginate(4);
        return view('application.category.index', compact('articles', 'category', 'categories'));
    }
}
