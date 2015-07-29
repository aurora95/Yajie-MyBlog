<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\ArticleClass;

class AdminHomeController extends Controller
{
    
    public function index()
    {
        return view('AdminHome')->withArticles(Article::all()->sortByDesc(function($article){ return $article->created_at; }));
    }

}
