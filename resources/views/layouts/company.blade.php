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
<body class="am-company-page">
<div class="am-header">
    <div class="am-navigation light">
        @include('partials.application.top')
    </div>
    <h1 class="am-entry-1">Augment farmer’s income. Increase global food quality and production levels.</h1>
    <div class="am-bloks-container">
      <div class="am-bloks-item am-entry-3">
        <img src="img/hectares-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our customers have used our product in more than</p>
        <h2>1900,5</h2>
        <p class="am-bloks-subtitle">Hectares</p>
      </div>
      <div class="am-bloks-item blr1 am-entry-4 d3">
        <img src="img/countries-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our device is augmenting farmer’s income in more than</p>
        <h2>42</h2>
        <p class="am-bloks-subtitle">Countries</p>
      </div>
      <div class="am-bloks-item am-entry-5 d6">
        <img src="img/dollars-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our customers have increased their income more than</p>
        <h2>1,690.00</h2>
        <p class="am-bloks-subtitle">US Dollars</p>
      </div>
    </div>
    <div class="am-gonext"></div>
</div>
<div class="am-vision">
<div class="container">
  <div class="row">
    <div class="col-md-12"><h2>OUR <span>VISION</span> & <span>MISSION</span></h2></div>
    <div class="col-md-6 am-vision-column br1"><strong>Our mission</strong> is to put our device on the tractor of every farmer offering incomparably precise and fully automated fertilisation in an affordable, plug-and-play solution.</div>
    <div class="col-md-6 am-vision-column"><strong>Augmenta’s</strong> state of the art deep learning device helps farmers substantially increase their bottom-line by boosting yield, reducing day to day input spend, while at the same time enhancing the quality of the crops and protecting the environment.</div>
    <div class="col-md-12">
      <div class="am-vision-illustration">
        <img src="img/our-vision-illustration.png" alt="">
        <div class="am-vision-circle-1"><img src="img/our-vision-img-1.png" alt=""><span>EFFICIENCY</span></div>
        <div class="am-vision-circle-2"><img src="img/our-vision-img-2.png" alt=""><span>PRODUCTIVITY</span></div>
        <div class="am-vision-circle-3"><img src="img/our-vision-img-3.png" alt=""><span>SUSTAINABILITY</span></div>
      </div>
    </div>
    <div class="col-md-12 text-center"><a href="blog/index.html" class="am-transp-button">OUR BLOG <i class="far fa-arrow-alt-circle-right"></i></a></div>
  </div>
</div>
</div>

<div class="am-team">
<div class="container">
  <div class="row">
    <div class="col-md-12"><h2>Who stands behind <span><span>The</span> augmenta?</span></h2></div>
    <div class="am-team-avatars">
    <div class="am-t-1"><img src="img/p-1.jpg" alt=""><div class="am-team-descr"><p>Barthelemy Chavet</p><p><span>Founder and Technology Adviso</span></p></div></div>
    <div class="am-t-2"><img src="img/p-2.jpg" alt=""><div class="am-team-descr"><p>John W. Thompson</p><p><span>Chairman</span></p></div></div>
    <div class="am-t-3"><img src="img/p-3.jpg" alt=""><div class="am-team-descr"><p>Satya Nadella</p><p><span>Chief Executive Officer</span></p></div></div>
    </div>
    <div class="am-team-border"><div class="am-border-circle"><img src="img/logo-gray.svg" alt=""></div></div>

    <div class="am-team-avatars">
     <div class="am-team-block"><div><p>Reid Hoffman</p><p>Partner at Greylock Partners</p></div></div>
     <div class="am-team-block"><div><p>Teri L. List-Stoll</p><p>Executive Vice President</p></div></div>
     <div class="am-team-block"><div><p>Padmasree Warrior</p><p>CEO and Chief Development Office</p></div></div>
    </div>
    <div class="am-team-avatars">
    <div class="am-team-block"><div><p>Domenica Meszaros</p><p>Partner at Greylock Partners</p></div></div>
    <div class="am-team-block"><div><p>Margorie Manigo</p><p>Partner at Greylock Partners</p></div></div>
    <div class="am-team-block"><div><p>Harland Dejean</p><p>Executive Vice President</p></div></div>
    </div>
  </div>
</div>
</div>

<div class="am-jobs">
<div class="container">
  <div class="row">
    <div class="col-md-12"><h2>join our team</h2></div>
    <div class="col-md-6 am-jobs-1"><p>We are a <span>rapidly growing</span> hardware startup. If you are <strong>passionate</strong> about deep learning models and wish to have an impact on farmers’ lives and global food production, send us your information.</p><strong>can’t find a position that suits you?</strong><a href="#" class="am-white-button">GET IN TOUCH  <i class="far fa-arrow-alt-circle-right"></i></a></div>
    <div class="col-md-6 am-jobs-2">
      <div class="am-job-row">
        <p>Development</p>
        <a href="#">Junior Software Engineer (PHP / JS)</a>
      </div>
      <div class="am-job-row">
        <p>Development</p>
        <a href="">Front-End Engineer</a>
      </div>
      <div class="am-job-row">
        <p>Design</p>
        <a href="">UX/UI Designer</a>
      </div>
      <div class="am-job-row">
        <p>marketing</p>
        <a href="">Marketing Analyst</a>
      </div>
      <div class="am-button-row"><a href="#" class="am-transp-white-button">view all on workable <i class="far fa-arrow-alt-circle-right"></i></a></div>
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
