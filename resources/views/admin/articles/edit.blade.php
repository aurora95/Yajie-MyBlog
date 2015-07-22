@extends('base')

@section('content')

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

      <div class="panel panel-default">
        <div class="panel-heading">编辑 Page</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/'.$article->classname.'/articles/'.$article->id) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
            <br>
            <textarea name="body" rows="100" class="form-control" required="required">{{ $article->body }}</textarea>
            <script type="text/javascript">CKEDITOR.replace('body');</script>
            <br>
            <button class="btn btn-lg btn-info">编辑 Page</button>
          </form>

        </div>
      </div>

@endsection
