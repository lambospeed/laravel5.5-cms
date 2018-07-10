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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" rel="stylesheet">
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
</head>
<body class="am-product-page">
<div id="fullPage">
<section class="vertical-scrolling">
<div class="am-header">
    <div class="am-navigation tr-dark">
        @include('partials.application.top')
    </div>
    <h1 class="am-entry-1">Precise <span>real-time</span> scan </h1>
    <div class="am-3d am-entry-3"><img src="img/augmenta-3d.png" alt=""></div>
    <div class="am-gonext"></div>
</div>
</section>

<section class="vertical-scrolling">
<div class="container am-manual">
<div class="row">
<div class="col-md-12">
  <div class="am-manual-slider-container">
    <div class="am-manual-slider-prev"><img src="img/arrow-left.png" alt=""></div>
    <div class="am-manual-slider-next"><img src="img/arrow-right.png" alt=""></div>
    <div class="am-manual-slider">
      <div class="am-manual-item active" data-content="1"><p class="am-manual-step">.01</p><div class="am-manual-mask"><img src="img/instalation-icon.svg" alt=""></div><p class="am-manual-title">Installation</p></div>
      <div class="am-manual-item" data-content="2"><p class="am-manual-step">.02</p><div class="am-manual-mask"><img src="img/system-icon.svg" alt=""></div><p class="am-manual-title">System Architecture</p></div>
      <div class="am-manual-item" data-content="3"><p class="am-manual-step">.03</p><div class="am-manual-mask"><img src="img/abalysis-icon.svg" alt=""></div><p class="am-manual-title">Real time analysis</p></div>
      <div class="am-manual-item" data-content="4"><p class="am-manual-step">.04</p><div class="am-manual-mask"><img src="img/control-icon.svg" alt=""></div><p class="am-manual-title">Real time control</p></div>
      <div class="am-manual-item" data-content="5"><p class="am-manual-step">.05</p><div class="am-manual-mask"><img src="img/data-icon.svg" alt=""></div><p class="am-manual-title">Actionable Data</p></div>
    </div>
  </div>
  <div class="am-manual-container">
    <div class="am-manual-content active" data-content="1">
      <div class="am-manual-title-mask"><h2>Plug n’ Play device, <span>isobus compatible</span></h2></div>
      <div class="am-manual-video">
        <video autoplay muted loop style="height: 100%">
          <source src="/img/01_AUG.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <div class="am-manual-content" data-content="2">
      <div class="am-manual-title-mask"><h2>100% automation from crop scanning <span>to fertilizer application and pesticide spraying </span></h2></div>
      <div class="am-manual-video">
        <video autoplay muted loop style="height: 100%">
          <source src="/img/01_AUG.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <div class="am-manual-content" data-content="3">
      <div class="am-manual-title-mask"><h2>Hyperspectral computer vision detects crop diseases and nutrient deficiencies <span>in real time </span></h2></div>
      <div class="am-manual-video">
        <video autoplay muted loop style="height: 100%">
          <source src="/img/02_AUG.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <div class="am-manual-content" data-content="4">
      <div class="am-manual-title-mask"><h2>Real-time dosage adjustment by <span>controlling spreader sliders and sprayer electrovalves</span></h2></div>
      <div class="am-manual-video">
        <video autoplay muted loop style="height: 100%">
          <source src="/img/03_AUG.mp4" type="video/mp4">
        </video>
      </div>
    </div>

    <div class="am-manual-content" data-content="5">
      <div class="am-manual-title-mask"><h2>Visual data analytics <span>in a private, secure platform</span></h2></div>
      <div class="am-manual-video">
        <video autoplay muted loop style="height: 100%">
          <source src="/img/04_AUG.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="am-learning">
  <div class="container">
  <div class="row">
    <div class="col-md-6 am-learning-column-1">
      <div>
      <h3>Augmenta is <span>"learning"</span> on the go, using a plug-n-play device that can be mounted on any tractor and controls agricultural machinery by analyzing real-time, close range, 4k video data.</h3>
      <p>Augmenta’s Field Analyzer is the only product that can promise efficiency for every inch of the farm by capitalizing on proprietary artificial intelligence techniques both on the device itself and in the cloud, ripping benefits of real-time and at rest analysis.</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="img/augmenta-bg.png" alt="">
    </div>
  </div>
  </div>
</div>
@include('partials.application.footer')
<script src="{{ asset(mix('dist/js/script.js')) }}" type="text/javascript"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
</body>
</html>
