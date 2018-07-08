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
    <div class="am-navigation light">
        @include('partials.application.top')
    </div>
    <h1 class="am-entry-1">Boost yield, enhance quality & reduce input spend</h1>
    <div class="am-entry-2"><a href="#" class="am-green-button">watch full video <i class="fas fa-caret-right"></i></a></div>
    <p class="am-mouse-secr am-entry-3">Rip the benefits of automated fertilization in real-time</p>
    <div class="am-gonext"></div>
</div>
<div class="container-fluid am-explore">
<div class="row">
  <div class="col-md-12"><h2>Augmenta's <span>Field Analyzer</span></h2></div>
  <div class="col-md-6 posr">
    <div class="am-border-left-1px"></div>
    <img class="am-explore-icon" src="img/scan-icon.svg" alt="">
    <p class="am-explore-container"><strong>Plug and Play</strong> hardware scans the field in real time and controls agricultural machinery allowing for 100% automated fertilizer application and pesticide spraying with unforeseen precision.</p>
  </div>
  <div class="col-md-6">
    <img class="am-explore-icon" src="img/plant-icon.svg" alt="">
    <p class="am-explore-container"><strong>Artifical Intelligence</strong> technology enables crops reach their full potential based on the needs of every inch of the field, helping farmers substantially increase their bottom-line by boosting yield and decreasing day to day input costs.</p>
  </div>
  <div class="col-md-12 text-center">
    <a href="#" class="am-transp-button">explore <i class="far fa-arrow-alt-circle-right"></i></a>
  </div>
  <div class="am-explore-illustration-container">
    <img class="am-explore-cloud-1" src="img/cloud-1.svg" alt="">
    <img class="am-explore-cloud-2" src="img/cloud-2.svg" alt="">
    <img class="am-explore-illustration" src="img/augmenta-illustration.png" alt="">
  </div>
</div>
</div>

<div class="am-scan">
  <div class="am-scaner"><div class="am-scaner-circle"><img src="img/arrows.png" alt=""></div></div>
  <div class="am-scan-2"></div>
  <div class="am-scan-1" style="clip: rect(auto, 68vw, auto, auto);"></div>
  <div class="am-scan-title-container">
    <h2>How augumenta’s field analyser sees plants</h2>
    <div class="am-scan-buttons">
      <div><a href="#" class="am-white-button">FERTILIZER</a></div>
      <div><a href="#" class="am-transp-white-button">CROP DISEASES</a></div>
    </div>
  </div>
</div>

<div class="am-charts">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-9 am-charts-3d">
      <div class="am-charts-3d-title"><div><h2>Augmenta <span>offers</span></h2></div><div><img src="img/3d-icon.png" alt=""></div></div>
      <div class="am-3d"><img src="img/augmenta-3d.png" alt=""></div>
      <div class="am-charts-container">
        <div class="am-charts-item active" data-path="0">
          <p>yeld production up to</p>
          <h3>12%</h3>
          <div class="am-snap-chart">
            <svg id="svg-1" viewBox="0 0 89.5 25.9"></svg>
          </div>
        </div>
        <div class="am-charts-item" data-path="1">
          <p>fertilizer savings up to</p>
          <h3>15%</h3>
          <div class="am-snap-chart">
            <svg id="svg-2" viewBox="0 0 89.5 25.9"></svg>
          </div>
        </div>
        <div class="am-charts-item" data-path="2">
          <p>quality improvement up to</p>
          <h3>20%</h3>
          <div class="am-snap-chart">
            <svg id="svg-3" viewBox="0 0 89.5 25.9"></svg>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 am-charts-offers">
      <h3>Achieve unforeseen precision with affordable pricing. No need to change your habits and work process.</h3>
      <div class="am-charts-rows">
        <div class="am-charts-row r1">
          <p>REAL TIME</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:80%;"></div>
            <div class="am-charts-row-curr" style="width:35%;"></div>
          </div>
        </div>
        <div class="am-charts-row r2">
          <p>efficiency</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:70%;"></div>
            <div class="am-charts-row-curr" style="width:10%;"></div>
          </div>
        </div>
        <div class="am-charts-row r3">
          <p>realiability</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:80%;"></div>
            <div class="am-charts-row-curr" style="width:12%;"></div>
          </div>
        </div>
        <div class="am-charts-row r4">
          <p>farm-tailored</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:90%;"></div>
            <div class="am-charts-row-curr" style="width:20%;"></div>
          </div>
        </div>
        <div class="am-charts-row r5">
          <p>price</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:75%;"></div>
            <div class="am-charts-row-curr" style="width:60%;"></div>
          </div>
        </div>
        <div class="am-charts-row r6">
          <p>operator comfort</p>
          <div class="am-charts-perc">
            <div class="am-charts-row-100"></div>
            <div class="am-charts-row-max" style="width:80%;"></div>
            <div class="am-charts-row-curr" style="width:30%;"></div>
          </div>
        </div>
      </div>
      <div class="am-charts-offers-menu"><span>Augmenta</span><span class="am-link active" data-perc="35,10,12,20,60,30">SATELITES</span><span class="am-link" data-perc="50,20,22,25,70,35">drones</span><span class="am-link" data-perc="60,25,30,25,75,40">real time</span></div>
    </div>
  </div>
  </div>
</div>

<div class="am-contact">
  <div class="container">
    <div class="row form-input">
      <div class="col-md-12 text-center">
        <h3>Want to become one<br> of our <span>premium beta testers?</span></h3>
        <span class="am-contact-subtitle">Reach out for more information</span>
      </div>
      <div class="col-md-10 offset-md-1">
         <form id="am-form" action="form-process.php" method="POST">
           <div class="container">
             <div class="row">
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="name" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Name</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="company" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Company</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                 <input class="inputMaterial" type="email" name="email" required>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label>Email</label>
               </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="phone" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Phone</label>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="group form-group has-feedback">
                   <textarea class="inputMaterial" rows="4" name="message" required></textarea>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Message</label>
                 </div>
               </div>
               <div class="col-md-12 text-center">
                 <button class="am-transp-button" id="buttonGet" type="submit">send message <i class="far fa-arrow-alt-circle-right"></i></button>
               </div>
        </div>
        </div>
        </form>
      </div>
    </div>
    <div class="row form-thankyou">
      <div class="col-md-12 text-center">
        <h3>Thank you!</h3>
        <span>Your message has beed received. We’ll get back to you shortly.</span>
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
