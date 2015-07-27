@extends('base')

@section('content')

	<h1 style="text-align: center; margin-top: 50px;">{{ $article->title }}</h1>
  	<hr>
  	<div id="date" style="text-align: right;">
    	{{ $article->updated_at }}
  	</div>
  	<div id="content" style="padding: 4%;">
      	 <?php echo($article->body) ?>
  	</div>

@endsection