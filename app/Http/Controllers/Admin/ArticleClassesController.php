<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ArticleClass;
use App\Article;

use Redirect, Input, Auth;

class ArticleClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'classname' => 'required',
        ]);

        $articleclass = new ArticleClass;
        $articleclass->classname = Input::get('classname');
        if ($articleclass->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $classname)
    {
        $this->validate($request, [
            'classname' => 'required',
        ]);

        $articleclass = ArticleClass::find($classname);
        $articleclass->classname = Input::get('classname');
        if ($articleclass->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($classname)
    {
        $articleclass = ArticleClass::find($classname);
        $articles = $articleclass->hasManyArticles;
        foreach ($articles as $article) {
            $article->delete();
        }
        $articleclass->delete();

        return Redirect::to('admin');
    }
}
