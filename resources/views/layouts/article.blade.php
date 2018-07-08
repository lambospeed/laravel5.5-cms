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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="am-post-body">
<div class="am-header" style="background-image:url('/img/hero-2.jpg')">
    <div class="am-navigation dark">
        @include('partials.application.top')
        <div class="container am-aditional-navigation"><div><a href="{{ route('blog') }}"><i class="far fa-arrow-alt-circle-left"></i> GO BACK TO BLOG LIST</a></div></div>
    </div>
    <div class="container am-blog-header">
        <div class="row">
            <div class="col-md-12 am-post-header">
            <p class="am-header-date am-entry-1"><span>{{ $article->category->title}}</span> - {{ $article->published_at }}</p>
            <h1 class="am-entry-2">{{ $article->title }}</h1>
            <p class="am-post-description am-entry-3">School’s out, summer’s here and kids are spending more time at home. I’ve been hearing from friends and fellow parents that it’s harder to keep kids entertained during these summer months.</p>
            </div>
        </div>
    </div>
    <img class="am-gonext" src="/img/mouse.png" alt="">
</div>
<div class="container am-blog am-entry-4">
    @yield('content')
</div>
<div class="am-related-articles">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>related articles</h2>
      <div class="col-md-12 am-related-container">

      <div class="am-blog-item">
        <div class="am-blog-item-img">
          <a href="post.html"><img src="/img/blog-1.jpg" alt=""></a>
        </div>
        <div class="am-blog-title">
        <p class="am-blog-date"><span>Category</span> - dec 8, 2018</p>
        <a href="post.html"><h3>Four tips for taking delectable food photos with Pixel 2</h3></a>
        <div class="am-blog-buttons">
          <div><a href="post.html" class="am-button" href="#">read article <i class="far fa-arrow-alt-circle-right"></i></a></div>
          <div><a href="post.html" class="am-button"><i class="fas fa-reply"></i></a></div>
        </div>
        </div>
      </div>

      <div class="am-blog-item">
        <div class="am-blog-item-img">
          <a href="post.html"><img src="/img/blog-2.jpg" alt=""></a>
        </div>
        <div class="am-blog-title">
        <p class="am-blog-date"><span>Category</span> - dec 8, 2018</p>
        <a href="post.html"><h3>Google Home, the summer camp counselor every family needs</h3></a>
        <div class="am-blog-buttons">
          <div><a href="post.html" class="am-button" href="#">read article <i class="far fa-arrow-alt-circle-right"></i></a></div>
          <div><a href="post.html" class="am-button"><i class="fas fa-reply"></i></a></div>
        </div>
        </div>
      </div>

      <div class="am-blog-item">
        <div class="am-blog-item-img">
          <a href="#"><img src="/img/blog-3.jpg" alt=""></a>
        </div>
        <div class="am-blog-title">
        <p class="am-blog-date"><span>Category</span> - dec 8, 2018</p>
        <a href="post.html"><h3>7 must-see Chrome Enterprise sessions at Google Cloud Next</h3></a>
        <div class="am-blog-buttons">
          <div><a href="post.html" class="am-button" href="#">read article <i class="far fa-arrow-alt-circle-right"></i></a></div>
          <div><a href="post.html" class="am-button"><i class="fas fa-reply"></i></a></div>
        </div>
        </div>
      </div>

      </div>
    </div>
  </div>
  </div>
</div>

@include('partials.application.footer')
<script src="{{ asset(mix('dist/blog/js/script.js')) }}" type="text/javascript"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
</body>
</html>
