
<html>
<head>
    <link rel="shortcut icon" sizes="32x32" href="">
    <link rel="icon" sizes="64x64" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta itemprop="keywords" name="keywords" content=""/>
    <meta itemprop="description" name="description" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:country-name" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>System</title>

    <!-- Bootstrap CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/member.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <![endif]-->
</head>
<body>

<div class="col-md-12">
    <div class="col-md-3">
        <div class="container-fluid main-left">
            <div class="nav-global">
                <nav class="header-left">
                    <h3 style="color: red">Manager System</h3>
                </nav>
                <div class="content-main-left">
                    <div class="sidebar-nav ps ps--active-y">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('member')}}"><span class="glyphicon glyphicon-pencil"></span>
                                    Manage Member
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=""> <i class="glyphicon glyphicon-th-list"></i>Advisory</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href=""><i class="glyphicon-fast-backward"></i>Customer</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href=""><i class="glyphicon-fast-backward"></i>Invoice</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href="{{route('member')}}"><i class="glyphicon-fast-backward"></i>Member</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href=""><i class="glyphicon-fast-backward"></i>News</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href=""><i class="glyphicon-fast-backward"></i>Partner</a>
                            </li>
                            <li class = "nav-item">
                                <a class="nav-link" href=""><i class="glyphicon-fast-backward"></i>Company</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="container header-login">
            <header id="header">
                <div class="nav-global">
                    <nav class="navbar">
                        <div id="navbar3" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a class="header-top" href="{{ url('/')}}">
                                        <img class="picture" src="{{ asset('img/home-img.png')}}" alt=""></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav  navbar-right">
                                <li><a style="color: white" href="#">ログイン者：山田　桃山</a></li>
                                <li style="color: white">
                                    <a style="color: white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">ログアウト</a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
        <div id="main" class="main-content">
            @yield('content')
            <script src="{{asset('/js/jquery.min.js')}}"></script>
            <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        </div>
    </div>
</div>
</body>
</html>