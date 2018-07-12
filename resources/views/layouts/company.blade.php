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
    <!-- Start of HubSpot Embed Code -->
    <script type=“text/javascript” id=“hs-script-loader” async defer src=“//js.hs-scripts.com/4712866.js”></script>
    <!-- End of HubSpot Embed Code -->
</head>
<body class="am-company-page">
<div class="am-go-top"><i class="fas fa-chevron-circle-up"></i></div> 
<div id="fullPage">
<section class="vertical-scrolling">
<div class="am-header">
    <div class="am-navigation light">
        @include('partials.application.top')
    </div>
    <h1 class="am-entry-1">Augment farmer’s income. Increase global food quality and production levels.</h1>
    <div class="am-bloks-container">
      <div class="am-bloks-item am-entry-3">
        <img src="/img/hectares-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our customers have used our product in more than</p>
        <p>To be announced</p>
        <p class="am-bloks-subtitle">Hectares</p>
      </div>
      <div class="am-bloks-item blr1 am-entry-4 d3">
        <img src="/img/countries-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our device is augmenting farmer’s income in more than</p>
        <p>To be announced</p>
        <p class="am-bloks-subtitle">Countries</p>
      </div>
      <div class="am-bloks-item am-entry-5 d6">
        <img src="/img/dollars-icon.svg" alt="">
        <p class="am-bloks-subtitle">Our customers have increased their income more than</p>
        <p>To be announced</p>
        <p class="am-bloks-subtitle">US Dollars</p>
      </div>
    </div>
    <div class="am-gonext"></div>
</div>
</section>

<section class="vertical-scrolling">
<div class="am-vision">
<div class="container">
  <div class="row">
    <div class="col-md-12 am-entry-1"><h2>OUR <span>VISION</span> & <span>MISSION</span></h2></div>
    <div class="col-md-6 am-vision-column br1 am-entry-2"><strong>Our mission</strong> is to put our device on the tractor of every farmer offering incomparably precise and fully automated fertilisation in an affordable, plug-and-play solution.</div>
    <div class="col-md-6 am-vision-column am-entry-3"><strong>Augmenta’s</strong> state of the art deep learning device helps farmers substantially increase their bottom-line by boosting yield, reducing day to day input spend, while at the same time enhancing the quality of the crops and protecting the environment.</div>
    <div class="col-md-12">
      <div class="am-vision-illustration am-entry-4">
        <img class="am-vision-bg-image" src="/img/our-vision-illustration.png" alt="">
        <div class="am-vision-circle-1"><img src="/img/our-vision-img-1.png" alt=""><span>EFFICIENCY</span></div>
        <div class="am-vision-circle-2"><img src="/img/our-vision-img-2.png" alt=""><span>PRODUCTIVITY</span></div>
        <div class="am-vision-circle-3"><img src="/img/our-vision-img-3.png" alt=""><span>SUSTAINABILITY</span></div>
      </div>
    </div>
    <div class="col-md-12 text-center am-entry-5"><a href="{{ route('blog') }}" class="am-transp-button">OUR BLOG <i class="far fa-arrow-alt-circle-right"></i></a></div>
  </div>
</div>
</div>
</section>

<section class="vertical-scrolling">
<div class="am-team">
<div class="container">
  <div class="row">
    <div class="col-md-12"><h2 class="am-entry-1">Who stands behind <span><span>The</span> augmenta?</span></h2></div>
    <div class="am-team-avatars bottom am-entry-2">
    <div class="am-t-1"><img src="/img/Untitled-1.png" alt=""><div class="am-team-descr"><p>George Varvarelis</p><p><span>Co-Founder & CEO</span></p></div></div>
    <div class="am-t-2"><img src="/img/Untitled-2.png" alt=""><div class="am-team-descr"><p>Dimitris Evangelopoulos</p><p><span>Co-Founder & COO</span></p></div></div>
    <div class="am-t-3"><img src="/img/Untitled-3.png" alt=""><div class="am-team-descr"><p>Alex Nikolakakis</p><p><span>CTO</span></p></div></div>
    </div>
    <div class="am-team-avatars bottom am-entry-2">
    <div class="am-t-1"><img src="/img/Untitled-4.png" alt=""><div class="am-team-descr"><p>Dimitris Akridas</p><p><span>Head of Data Engineering</span></p></div></div>
    <div class="am-t-2"><img src="/img/Untitled-5.png" alt=""><div class="am-team-descr"><p>Chris Cavalaris</p><p><span>Head of Agronomy</span></p></div></div>
    <div class="am-t-3"><img src="/img/Untitled-6.png" alt=""><div class="am-team-descr"><p>Katerina Karakoula</p><p><span>Founder & Computer Vision Engineer</span></p></div></div>
    </div>
    <div class="am-team-avatars bottom am-entry-2">
    <div class="am-t-1"><img src="/img/Untitled-7.png" alt=""><div class="am-team-descr"><p>Kostas Karakasiliotis</p><p><span>Industrial Designer - Mechanics</span></p></div></div>
    <div class="am-t-2"><img src="/img/Untitled-8.png" alt=""><div class="am-team-descr"><p>Pavlos Stavrou</p><p><span>System Level Developer</span></p></div></div>
    <div class="am-t-3"><img src="/img/Untitled-3.png" alt=""><div class="am-team-descr"><p>Konstantinos Moustinas</p><p><span>Brand/Marketing Manager</span></p></div></div>
    <!-- <div class="am-t-3"><img src="/img/Untitled-3.png" alt=""><div class="am-team-descr"><p>Areti Bilal0</p><p><span>Operations Analyst</span></p></div></div> -->
    </div>
    <div class="am-team-border am-entry-4"><div class="am-border-circle"><img src="img/logo-gray.svg" alt=""></div></div>
  </div>
</div>
</div>
</section>

<section class="vertical-scrolling">
<div class="am-jobs">
<div class="container">
  <div class="row">
    <div class="col-md-12"><h2 class="am-entry-1">join our team</h2></div>
    <div class="col-md-6 am-jobs-1 am-entry-2"><p>We are a <span>rapidly growing</span> hardware startup. If you are <strong>passionate</strong> about deep learning models and wish to have an impact on farmers’ lives and global food production, send us your information.</p><strong>can’t find a position that suits you?</strong><a href="contact.html" class="am-white-button">GET IN TOUCH  <i class="far fa-arrow-alt-circle-right"></i></a></div>
    <div class="col-md-6 am-jobs-2 am-entry-3">
      <form id="am-cv-form" class="am-cv-form" action="form-process.php" method="POST">
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
                <input class="inputMaterial" type="text" name="surname" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Surname</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="group form-group has-feedback">
              <input class="inputMaterial" type="email" name="email" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Email</label>
            </div>
            </div>
            <div class="col-md-12">
              <div class="g-recaptcha" data-sitekey="6Ldo22MUAAAAAKpw9RfqM3dystMkRKvy_kngnM04"></div>
            </div>
            <div class="col-md-12 am-files">

            </div>
            <div class="col-md-6 am-files-button-container">
              <input type="file" name="files[]" class="input-file" id="files[]" multiple="">
              <label for="files[]" class="am-form-attach js-labelFile"><span class="js-fileName">Attach File</span> <i class="fas fa-paperclip"></i></label>
            </div>
            <div class="col-md-6 text-right">
              <button class="am-transp-button" id="buttonGet" type="submit">send <i class="far fa-arrow-alt-circle-right"></i></button>
            </div>
     </div>
     </div>
     </form>
     <div class="form-thankyou text-center h-100">
       <div class="form-thankyou-container">
         <div>
         <h3>Thank you!</h3>
         <span>Your message has beed received. We’ll get back to you shortly.</span>
         </div>
        </div>
     </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="vertical-scrolling">
@include('partials.application.footer')
</section>

</div>
<script src="{{ asset(mix('dist/js/script.js')) }}" type="text/javascript"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
