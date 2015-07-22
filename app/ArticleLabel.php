<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleLabel extends Model
{
    protected $primaryKey = 'labelname';
    public function hasManyArticles()
  	{
    	return $this->hasMany('App\Article', 'labelname', 'id');
  	}
}
