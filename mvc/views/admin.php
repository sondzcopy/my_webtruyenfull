<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php public_patch('img/favicon.ico'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php public_patch('css/all.min.css') ?>">
  <link rel="stylesheet" href="<?php public_patch('css/select2.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php public_patch('admin/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/summernote/summernote-bs4.min.css') ?>">
  <link rel="stylesheet" href="<?php public_patch('css/jquery-confirm.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php public_patch('img/favicon.ico') ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Trang truyện</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Liên hệ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm ..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo "dangxuat" ?>" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php public_patch('img/favicon.ico') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Truyện Full</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php public_patch('img/avatar.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['truyenfull_user']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm truyện" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo bangdieukhien ?>" class="nav-link <?php active('admin/bang-dieu-khien','active'); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Đảng điều kiển
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo dangtruyen ?>" class="nav-link <?php active('admin/dang-truyen','active'); ?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Đăng truyện
              </p>
            </a>
          </li>
          <li class="nav-header">Chức năng cơ bản</li>
          <li class="nav-item">
            <a href="<?php echo theloaitruyen ?>" class="nav-link <?php active('admin/the-loai-truyen','active'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thể Loại truyện
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo Truyen ?>" class="nav-link  <?php active('admin/truyen','active'); active('admin/sua-truyen','active');active('admin/danh-sach-chuong','active'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh sách truyện
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require_once './mvc/views/'.$data['page'].'.php'; ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Version 3.2.0
    </div>
    <strong>&copy; <?php echo date('Y') ?> <a href="<?php echo APP_URL ?>">Truyện Full</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <!-- <script src="<?php public_patch('ckeditor/ckeditor.js') ?>"></script> -->


<script src="<?php public_patch('admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?php public_patch('js/select2.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php public_patch('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?php public_patch('admin/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php public_patch('admin/dist/js/adminlte.min.js') ?>"></script>
<!-- jQuery Confirm -->

<script src="<?php public_patch('js/jquery-confirm.min.js') ?>"></script>
<!-- Your custom scripts -->
<script>
$(document).ready(function() {
    $('.select2').select2();
});

  <?php 
      if (isset($_COOKIE['message'])) {
        echo 'Alert("'.$_COOKIE["message"].'")';
      }
    ?>
    
</script>
</body>
</html>
