<!doctype html>
<html lang="ja">
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
    <title>Doctor</title>

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

<div class="container-fluid header-login">
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
                </div>
            </nav>
        </div>
    </header>
</div>

<main id="main" class="main-login">
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    @yield('content')
</main>
</body>
</html>