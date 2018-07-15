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
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/blog/css/styles.css')) }}">
    <link rel="icon" href="{{asset('img/icons/favicon-32x32.ico')}}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{asset('img/icons/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('img/icons/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('img/icons/favicon-64x64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('img/icons/favicon-128x128.png')}}" sizes="128x128">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122162291-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-122162291-1');
    </script>
</head>
<body>
<div class="am-header">
    <div class="am-navigation dark">
        @include('partials.application.top')
        <div class="container am-aditional-navigation">
            <div><span>Browse by category:</span></div>
            <div>
                <a href="{{ route('blog') }}" class="{{ isset($category) ? null : 'active' }}">All</a>
                @if(!empty($categories))
                    @foreach($categories as $data)
                        <a href="{{ $data->link}}" class="{{ (isset($category)) && ($category->id === $data->id)  ? 'active' : null }}">{{ $data->title}}</a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container am-blog-header">
    @foreach($articles as $article)
        @if($loop->first)
        <div class="row">
            <div class="col-md-6 text-left">
                <p class="am-header-date am-entry-1"><span>{{ $article->category->title }}</span> - {{ $article->published_at }}</p>
                <h1 class="am-entry-2">{{ $article->title }}</h1>
                <div class="am-entry-3"><a href="{{ $article->link }}" class="am-white-button ">read article <i class="far fa-arrow-alt-circle-right"></i></a></div>
            </div>
            <div class="col-md-6 am-header-relpy-section">
                <div class="am-entry-3"><a href="{{ $article->link }}" class="am-radial-white-button"><i class="fas fa-reply"></i></a></div>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</div>
<div class="container am-blog am-entry-4">
    @yield('content')
</div>
@include('partials.application.footer')
<script src="{{ asset(mix('dist/blog/js/script.js')) }}" type="text/javascript"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
</body>
</html>
