<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function hasManyComments()
  	{
    	return $this->hasMany('App\Comment', 'article_id', 'id');
  	}
  	public function belongsToArticleClass()
  	{
  		return $this->belongsTo(App\ArticleClass);
  	}
  	public function belongsToArticleLabel()
  	{
  		return $this->belongsTo(App\ArticleLabel);
  	}
}
