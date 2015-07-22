@extends('base')

@section('content')

      <div class="panel panel-default">
          <div class="panel-body">
        @if (!Auth::guest() && Auth::user()->name == "admin")
          <a href="{{ URL('admin/'.$classname.'/articles/create') }}" class="btn btn-lg btn-primary">新增</a>
          <form action="{{ URL('admin/articleclasses/'.$classname) }}" method="POST" style="display: inline;">
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger btn-lg">删除该类别</button>
          </form>
        @endif

          @foreach ($articles as $article)
            <hr>
            <div class="article">
              <a href="{{ URL('articles/'.$article->id) }}">
                <h2>{{ $article->title }}</h2>
              </a>
              <h6>{{ $article->created_at }}</h6>
            </div>

            @if (!Auth::guest() && Auth::user()->name == "admin")
              <a href="{{ URL('admin/'.$article->classname.'/articles/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
              <form action="{{ URL('admin/'.$article->classname.'/articles/'.$article->id) }}" method="POST" style="display: inline;">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">删除</button>
              </form>
            @endif
          @endforeach

        </div>
      </div>

@endsection