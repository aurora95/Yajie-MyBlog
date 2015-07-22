<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleClass extends Model
{
    protected $primaryKey = 'classname';
    public function hasManyArticles()
  	{
    	return $this->hasMany('App\Article', 'classname', 'classname');
  	}
  	
}
