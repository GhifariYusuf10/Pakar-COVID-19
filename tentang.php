<?php
error_reporting(0);
ob_start();
session_start();
include "config/koneksi.php";
include "config/fungsi_alert.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <base href="http://localhost/pakarcovid/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='aset/tentang/style.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="aset/login/css/style.css">
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet"  media="all">
    <link href="css/owl-carousel/owl.theme.css" rel="stylesheet"  media="all">
    <link href="css/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
    <link href="css/font.css" rel="stylesheet" type="text/css"  media="all">
    <link href="css/fontello.css" rel="stylesheet" type="text/css"  media="all">
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel=stylesheet href="css/paging.css" type="text/css" media=screen>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/AdminLTE.css">
    <link rel="stylesheet" href="aset/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="aset/skins/_all-skins.min.css">
    <link rel="stylesheet" href="aset/custom.css">
    <link rel="stylesheet" href="aset/icheck/green.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- jQuery 2.1.4 -->
    <script src="aset/jQuery-2.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap.js"></script>
    <script src="aset/icheck/icheck.js"></script>
    <script src="aset/ckeditor/ckeditor.js"></script>
    <script src="aset/Flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="aset/Flot/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="aset/Flot/jquery.flot.pie.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="aset/Flot/jquery.flot.categories.js"></script> 
    <!-- AdminLTE App -->
    <script src="aset/app.js"></script>
    <title>Tentang - Sistem Pakar COVID-19</title>
  </head>
  <body id="pakarcovid" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SP</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sistem Pakar COVID-19</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <?php include "menu.php"; ?>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 310px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="ma3">
          <article class="tc w-75 center pt5 pb2 ph3 mw6-ns ba bw1 b--light-gray" style="background: #fff;">
            <header class="mb4">
              <h1 class="f3 lh-title mv2 dark-gray">Sistem Pakar COVID-19</h1>
            <p class="f6 silver mt2 mb0"><a class="link dim silver"><button style="margin-bottom: 10px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Pengembang Aplikasi"><i class="fa fa-user" aria-hidden="true"></i> Ghifari Yusuf Abdillah</button></a>
            <br>
            <h2 class="f5 silver mt2 mb1">Sistem Pakar, Diagnosa Penyakit COVID-19</h2>
            <h2 class="f5 silver mt2 mb1">Copyright © 2020, <a class="link dim silver">Ghifari Yusuf Abdillah</a></h2>
            <br>
              <a class="link dim light-silver"  style="font-size: 40px;"><i class="fa fa-chrome" aria-hidden="true"></i></a>
              <a class="link dim light-silver"  style="font-size: 40px;"><i class="fa fa-firefox" aria-hidden="true"></i></a>
              <a class="link dim light-silver"  style="font-size: 40px;"><i class="fa fa-edge" aria-hidden="true"></i></a>
              <a class="link dim light-silver"  style="font-size: 40px;"><i class="fa fa-safari" aria-hidden="true"></i></a>
            </header>
            <p class="f6 tl lh-copy silver text-justify" style="margin: 20px;">Sistem pakar yang mampu mendiagnosa penyakit COVID-19 berdasarkan pengetahuan yang diberikan langsung dari pakar/ahlinya dan melalui studi  literatur. Penelitian ini menggunakan metode Forward Chaining dalam menghitung tingkat kepakaran. Data penelitian ini terdiri dari data gejala dan data penyakit COVID-19 di Indonesia.</p>
          </article>
        </div>
        </div>
    </div>
</div>
         <strong>Copyright © 2020 - Made by <a href="" target="_blank">Ghifari Yusuf Abdillah</a></div></strong>
      </footer>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div><!-- ./wrapper -->
  </body>
</html>