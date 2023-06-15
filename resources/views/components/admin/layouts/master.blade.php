<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>
        {{ $title ?? 'Admin | Cyberexpert'}}
    </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="user/images/favicon.svg" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('user/plugins/fontawesome/css/all.min.css')}}" />
    <link href="{{asset('/admin/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <x-admin.layouts.partials.navbar />
    <x-admin.layouts.partials.sidebar />
    {{ $slot }}

    <x-admin.layouts.partials.footer />
    <!-- jquery vendor -->
    <script src="{{asset('/admin/js/lib/jquery.min.js')}}"></script>

    <!-- nano scroller -->
    <script src="{{asset('/admin/js/lib/menubar/sidebar.js')}}"></script>

    <!-- sidebar -->

    <script src="{{asset('/admin/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admin/js/scripts.js')}}"></script>
    <!-- bootstrap -->



</body>

</html>