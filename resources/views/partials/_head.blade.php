  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('dscr')">
  <meta name="keywords" content="@yield('keywords')">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    @yield('extrahead')

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
  <!-- Vendor CSS -->
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">


  <link rel="stylesheet" href="{!! asset('css/rating.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/bootstrap/css/bootstrap-theme.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/font-awesome/css/font-awesome.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/font-material/css/material-design-iconic-font.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/owl.carousel/assets/owl.carousel.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/magnific-popup/magnific-popup.css') !!}">

  <link rel="stylesheet" href="{!! asset('vendor/nivo-slider/css/nivo-slider.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/nivo-slider/css/animate.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/nivo-slider/css/style.css') !!}">

  <link rel="stylesheet" href="{!! asset('vendor/slider-range/css/jslider.css') !!}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{!! asset('css/theme-global.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/theme-animate.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/theme-product.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/theme-product-list.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/theme-blog.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/theme-responsive.css') !!}">

  <!-- Template Custom CSS -->
  <link rel="stylesheet" href="{!! asset('css/custom.css') !!}">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126213276-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126213276-1');
  </script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
