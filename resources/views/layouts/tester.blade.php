<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script>
      window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fullPage">

<section class="vertical-scrolling">
@include('partials.application.contact')
</section>
</div>
<script>
  window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
</script>
<script src="{{ asset(mix('dist/js/script.js')) }}" type="text/javascript"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js?ver=1.12.9'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
</body>
</html>
