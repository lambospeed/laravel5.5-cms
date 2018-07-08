<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;

class CompanyController extends ApplicationController
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        $articles = session('current_lang')->articles()->published()->orderBy('published_at', 'desc')->paginate(6);
        return view('application.company.index', compact('articles'));
    }
}
