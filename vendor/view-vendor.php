<?php 
include '../crud/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM customers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Customer</title>

  <!-- Google Font: Source Sans Pro -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets-bootstrap/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets-bootstrap/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets-bootstrap/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
          <form class="form-inline"  method="get" action="">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="cari" value="<?php if (isset($_GET['cari'])) {
                echo $_GET['cari'];
              } ?>">
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
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
      <img src="../assets/images/Logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fashione</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets-bootstrap/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bintang Laura Anjani</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="../pages/dashboard.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="../pages/product.php" class="nav-link">
                  <!-- <i class="nav-icon fas fa-shopping-cart"></i> -->
                  <p>
                    Daftar Produk Array
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="../pages/product-loop.php" class="nav-link">
                  <!-- <i class="nav-icon fas fa-shopping-cart"></i> -->
                  <p>
                    Daftar Produk Looping
                  </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="../pages/crud-product.php" class="nav-link">
                  <!-- <i class="nav-icon fas fa-shopping-cart"></i> -->
                  <p>
                    CRUD Produk                  
                  </p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="../user/view-user.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Customer
                   <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../vendor/view-vendor.php" class="nav-link active">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Vendor
                   <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/logout.php" class="nav-link">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>
                    Logout
                   <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Nama Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Data Vendor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
          <?php
            if (isset($_GET['cari'])) {
              $cari = $_GET['cari'];
              echo "<h2>Hasil Pencarian dari : ".$cari."</h2>";
            }
          ?>
          <br>
          <br>
      <a href="../user/view-tambah-user.php" class="btn btn-info btn-sm-3 mb-3">
        <i class="nav-icon fas fa-plus"></i> Tambah Data Vendor
      </a>
      <div class="container-fluid">
      <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr class="text-center">
                      <th style="width: 10px">No</th>
                      <th>Kode Vendor</th>
                      <th>Nama Vendor</th>
                      <th>Nomor Telepon</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php

                  //konfigurasi pagination
                  $dataperhalaman = 3;
                  $halaman = isset($_GET['p'])?(int)$_GET['p'] : 1;
                  $halaman_awal = ($halaman > 1) ? ($halaman * $dataperhalaman) - $dataperhalaman : 0;

                  $next = $halaman + 1;
                  $previous = $halaman - 1;

                  $vendor = mysqli_query($koneksi, "SELECT * FROM vendors");
                  $jumlah_data = mysqli_num_rows($vendor);
                  $total_halaman = ceil($jumlah_data / $dataperhalaman);                 


                    if (isset($_GET['cari'])) {
                      $query = mysqli_query($koneksi, "SELECT * FROM vendors WHERE name LIKE '%".$cari."%'");
                    } else {
                      $query = mysqli_query($koneksi, "SELECT * FROM vendors 
                      LIMIT $halaman_awal, $dataperhalaman");
                    }
                    $nomor = 0;
                    while ($data = mysqli_fetch_array($query)) {
                      $nomor++;
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $nomor ?></td>
                      <td><?php echo $data['code']; ?></td>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['phone_number']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['address']; ?></td>
                      <td class="text-center">
                          <a href="../vendor/view-edit-vendor.php?code=<?php echo $data['code']; ?>" class="btn btn-outline-warning btn-sm"><i class="nav-icon fas fa-edit"></i></a>
                          <a href="../vendor/hapus.php?code=<?php echo $data['code']; ?>" class="btn btn-outline-danger btn-sm ms-3"><i class="nav-icon fas fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" <?php if ($halaman > 1) {
                    echo "href=?page=crud-product&p=$previous";
                  } ?>>Previous</a></li>

                  <?php for ($i=1; $i <= $total_halaman ; $i++) { ?>
                    <li class="page-item">
                    <a class="page-link" href="?page=crud-product&p=<?= $i ?>"><?= $i ?></a></li>
                  <?php } ?>
                  <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                  <li class="page-item"><a class="page-link" <?php if ($halaman < $total_halaman) {
                    echo "href=?page=crud-product&p=$next";
                  } ?>>Next</a></li>
                </ul>
              </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="../pages/dashboard.html">Fashione</a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets-bootstrap/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets-bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets-bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets-bootstrap/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets-bootstrap/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets-bootstrap/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets-bootstrap/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets-bootstrap/plugins/moment/moment.min.js"></script>
<!-- daterangepicker -->
<script src="../assets-bootstrap/plugins/moment/moment.min.js"></script>
<script src="../assets-bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets-bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets-bootstrap/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets-bootstrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets-bootstrap/js/adminlte(2).js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets-bootstrap/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets-bootstrap/js/pages/dashboard.js"></script>
</body>
</html>
