<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <!-- theme meta -->
  <meta name="theme-name" content="quixlab" />

  <title>
    Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com
  </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png" />
  <!-- Pignose Calender -->
  <link href="./admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet" />
  <!-- Chartist -->
  <link rel="stylesheet" href="./admin/plugins/chartist/css/chartist.min.css" />
  <link rel="stylesheet" href="./admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css" />
  <!-- Custom Stylesheet -->
  <link href="admin/css/style.css" rel="stylesheet" />
</head>

<body>
  <!--*******************
        Preloader start
    ********************-->
  <x-admin.layouts.partials.preloader />
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    <x-admin.layouts.partials.nav-header />
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <x-admin.layouts.partials.header />
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <x-admin.layouts.partials.sidebar />
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div>
      {{ $slot }}
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->

    <x-admin.layouts.partials.footer />

    <!--**********************************
            Footer end
        ***********************************-->
  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <x-admin.layouts.partials.scripts />

</body>

</html