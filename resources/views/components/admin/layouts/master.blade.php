<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>
        {{ $title ?? 'Admin | Reporter'}}
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
    <link rel="stylesheet" href="user/plugins/fontawesome/css/all.min.css" />
    <link href="/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/admin/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/lib/helper.css" rel="stylesheet">
    <link href="/admin/css/style.css" rel="stylesheet">
</head>

<body>

    {{ $slot }}


    <!-- jquery vendor -->
    <script src="/admin/js/lib/jquery.min.js"></script>
    <script src="/admin/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/admin/js/lib/menubar/sidebar.js"></script>
    <script src="/admin/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="/admin/js/lib/bootstrap.min.js"></script>
    <script src="/admin/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="/admin/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="/admin/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="/admin/js/lib/calendar-2/pignose.init.js"></script>


    <script src="/admin/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="/admin/js/lib/weather/weather-init.js"></script>
    <script src="/admin/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="/admin/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="/admin/js/lib/chartist/chartist.min.js"></script>
    <script src="/admin/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="/admin/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="/admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="/admin/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="/admin/js/dashboard2.js"></script>
</body>

</html>