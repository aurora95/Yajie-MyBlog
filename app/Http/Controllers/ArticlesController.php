<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticlesController extends Controller
{

    public function show($id)
    {
        return view('article.show')->withArticle(Article::find($id));
    }

}
