<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ArticleClass;
use App\Article;

use Redirect, Input, Auth;

class ArticleClassesController extends Controller
{
    
    public function show($classname)
    {
        return view('ArticleClass.show')
            ->withArticles(Article::where('classname', $classname)->orderBy('created_at', 'desc')->get())
            ->with('classname', $classname);
    }

   
}
