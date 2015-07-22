@extends('base')

@section('content')

      <div class="panel panel-default">
        <div class="panel-heading">后台首页</div>

        <div class="panel-body">

          @foreach ($articles as $article)
            <hr>
            <div class="article">
              <h2>{{ $article->title }}</h3>
              <h6>{{ $article->created_at }}</h6>
              <h4>{{ $article->classname }}</h4>
            </div>
            <a href="{{ URL('admin/'.$article->classname.'/articles/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>

            <form action="{{ URL('admin/'.$article->classname.'/articles/'.$article->id) }}" method="POST" style="display: inline;">
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">删除</button>
            </form>
          @endforeach

        </div>
      </div>

@endsection