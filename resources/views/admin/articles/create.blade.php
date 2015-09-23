@extends('base')

@section('content')
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

      <div class="panel panel-default">
        <div class="panel-heading">新增 article</div>

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

          <form action="{{ URL('admin/'.$classname.'/articles') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="classname" value="{{ $classname }}">
            <input type="text" name="title" class="form-control" required="required">
            <br>
            <textarea name="body" rows="500" class="form-control" required="required"></textarea>
            <script type="text/javascript">CKEDITOR.replace('body');</script>
            <br>
            <button class="btn btn-lg btn-info">新增 article</button>
          </form>

        </div>
      </div>

@endsection