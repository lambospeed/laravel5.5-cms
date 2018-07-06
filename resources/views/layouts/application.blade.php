<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="og:title" content="@yield('title')" >
    <meta name="twitter:title" content="@yield('title')">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/styles.css')) }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="am-header">
    <div class="am-navigation dark">
        @include('partials.application.top')
        <div class="container am-aditional-navigation"><div><span>Browse by category:</span></div><div><a href="#" class="active">All</a><a href="#">equipment</a><a href="#">finance</a><a href="#">Augmenta</a></div></div>
    </div>
    <div class="container am-blog-header">
        <div class="row">
            <div class="col-md-6 text-left">
                <p class="am-header-date am-entry-1"><span>Finance</span> - dec 8, 2018</p>
                <h1 class="am-entry-2">Introducing <span class="colg">simpler brands</span> and solutions for advertisers and publishers</h1>
                <div class="am-entry-3"><a href="post.html" class="am-white-button ">read article <i class="far fa-arrow-alt-circle-right"></i></a></div>
            </div>
            <div class="col-md-6 am-header-relpy-section">
                <div class="am-entry-3"><a href="post.html" class="am-radial-white-button"><i class="fas fa-reply"></i></a></div>
            </div>
        </div>
    </div>
</div>
<div class="container am-blog am-entry-4">
    @yield('content')
</div>
@include('partials.application.footer')
<script src="{{ asset(mix('dist/js/application.js')) }}" type="text/javascript"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
</body>
</html>
