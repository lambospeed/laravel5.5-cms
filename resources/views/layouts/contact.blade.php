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
<body class="am-contact-page">
<div class="am-header">
    <div class="am-navigation light">
        @include('partials.application.top')
    </div>
    <div class="am-circles-animation">
    <div class="am-ca-1"></div>
    <div class="am-ca-2 am-ca-anim3"></div>
    <div class="am-ca-3 am-ca-anim2"></div>
    <div class="am-ca-4 am-ca-anim"></div>
  </div>
  <h1 class="am-entry-1">Get in touch</h1>
  <p class="am-header-subtitle am-entry-2">Feel free to contact us directly or via the form below</p>
  <div class="am-bloks-container">
    <div class="am-bloks-item am-entry-3">
      <img src="img/location-icon.svg" alt="">
      <p class="am-bloks-title">location</p>
      <p class="am-bloks-subtitle">Iereos Dousi 8, Marousi 151 24, Greece</p>
    </div>
    <div class="am-bloks-item blr1 am-entry-4 d3">
      <img src="img/email-icon.svg" alt="">
      <p class="am-bloks-title">email</p>
      <p class="am-bloks-subtitle">office@augmenta.com</p>
    </div>
    <div class="am-bloks-item am-entry-5 d6">
      <img src="img/phone-icon.svg" alt="">
      <p class="am-bloks-title">phone</p>
      <p class="am-bloks-subtitle">+30 21 0370 7000</p>
    </div>
  </div>
  <div class="am-gonext"></div>
</div>
<div class="am-contact">
  <div class="container">
    <div class="row form-input">
      <div class="col-md-12 text-center">
        <h3>Contact us</span></h3>
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
