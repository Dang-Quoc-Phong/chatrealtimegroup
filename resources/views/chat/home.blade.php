<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamstechnologies.com/html/template/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 17:02:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@dreamguystech">
    <meta name="twitter:title" content="Template Content">
    <meta name="twitter:description" content="Template Content">
    <meta name="twitter:image" content="{{ asset('assets/img/meta-image.png') }}">
    <meta name="twitter:image:alt" content="Twitter Image Alt Text">
    <meta property="og:url" content="Template Landing Page URL">
    <meta property="og:title" content="Template Title">
    <meta property="og:description" content="Template Content">
    <meta property="og:image" content="{{ asset('assets/img/meta-image.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/img/meta-image.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <title>@yield('title', 'trang chu')</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/intltelinput/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/intltelinput/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('style')
    
</head>
<body>
    
    
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/plugins/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9bce2b3f1f3cca37324ae074-|49" defer></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('content')
    @yield('script')

</body>



</html>
