@extends('base')

@section('content')
	<div id="content">

     				<div class="panel panel-default">
        					<div class="panel-body">

          						@foreach ($articles as $article)
            						<hr>
            						<div class="article">
              							<a href="{{ URL('articles/'.$article->id) }}" class="btn ">
											        <h2>{{ $article->title }}</h2>
										        </a>
              							<h6>{{ $article->created_at }}</h6>
              							<h4>{{ $article->classname }}</h4>
            						</div>
            					@endforeach

        					</div>
    				</div>

	</div>
@endsection