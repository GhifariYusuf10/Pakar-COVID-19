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
    <link href="css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
          <div class="box">
            <div class="box-body">
              <h2 class="text-center">Data COVID-19 di Indonesia</h2>
              <hr>
                <?php include "content.php"; ?>
                <div class="text-center">  
                <p><button type="button" class="btn btn-lg btn-info" data-target="#modalDiagnosa" data-toggle="modal" data-whatever="@getbootstrap">Mulai Diagnosa</button></p>
                </div> 
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- Default to the left --><!-- Tombol untuk memicu modal -->
    <!---------------- MODAL ----------------->
    <div class="modal fade" id="modalDiagnosa" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="max-width: 300px;">
              <!-- Modal Header -->
              <div class="modal-header mdl-kontak">
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                      <span class="sr-only">Tutup</span>
                  </button>
                  <h4 class="text-ket text-center" id="labelModalKu"></i> Identitas Pasien</h4>
              </div>
              <!-- Modal Body -->
              <div class="modal-body">
                  <p class="statusMsg"></p>
                  <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
                      <div class="form-group">
                          <label for="masukkanNama">Nama :</label>
                          <input type="text" class="form-control" id="masukkanNama" placeholder="Masukkan Nama" style="margin-left: 11px; "/>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Umur :</label>
                        <input type="number" name="umur" class="form-control" placeholder="Masukkan Umur" style="margin-left: 11px;">
                      </div>
                  </form>
              </div>

              <!-- Modal Footer -->
              <div class="modal-footer">
                  <button type="button" class="btn bg-red btn-flat" data-dismiss="modal">Keluar</button>
                  <a href="diagnosa.php" class="btn bg-aqua btn-flat" role="button">Mulai Diagnosa</a>
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
<?php            
ob_end_flush();
?>