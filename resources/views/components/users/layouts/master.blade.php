<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8" />

    <title>
        {{ $title ?? 'CyberExpert'}}
    </title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Construction Html5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Ismail Hossain" />
    <meta name="websitename" content="cyberexpert" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="/user/images/favicon.svg" />

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('user/plugins/bootstrap/bootstrap.min.css')}}" />

    <!-- FontAwesome -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="user/plugins/font-awesome/css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="{{asset('user/plugins/fontawesome/css/all.min.css')}}" />
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('user/plugins/animate-css/animate.css')}}" />
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset('user/plugins/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('user/plugins/slick/slick-theme.css')}}" />
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('/user/plugins/colorbox/colorbox.css')}}" />
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('/user/css/style.css')}}" />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.css'>



</head>

<body>
    <x-users.layouts.partials.modal />
    <x-users.layouts.partials.topnav />



    <div class="body-margin">
        {{ $slot }}
    </div>

    <x-users.layouts.partials.footer />
    <x-users.layouts.partials.scripts />


</body>

</html>