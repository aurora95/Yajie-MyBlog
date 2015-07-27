<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>贰</title>

    <link href="/css/app.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

    @if (!Agent::isMobile())
    <div id="title" style="text-align: center;">
        <h1>贰</h1>
        <div style="padding: 5px; font-size: 16px;">大风起兮 心若止水身似云 黄鹤游兮 背负青天羽为襟</div>
    </div>
    <hr>
    @endif

    <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">贰</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">首页</a></li>
                </ul>

                @if (!Auth::guest() && Auth::user()->name == "admin")
                <ul class="nav navbar-nav">
                    <li><a href="/admin">后台首页</a></li>
                </ul>

                @endif

                @foreach ($articleclasses as $articleclass)
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL('articleclasses/'.$articleclass->classname) }}">{{ $articleclass->classname }}</a></li>
                </ul>
                @endforeach

                @if (!Auth::guest() && Auth::user()->name == "admin")
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">添加类型 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <form action="{{ URL('admin/articleclasses/store') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="classname" class="form-control" required="required">
                                    <button class="btn">添加</button>
                                </form>
                            </ul>
                    </li>
                </ul>

                @endif

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/auth/login">Login</a></li>
                        <li><a href="/auth/register">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    </div>
    </div>
    </div>

    

    
</body>
</html>
