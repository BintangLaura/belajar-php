<?php 
// include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Edit</title>

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
      <li class="nav-item mt-2 mr-1">
        <?php
        $hari = [
          "Minggu", "Senin", "Selasa", "Rabu",
          "Kamis", "Jumat", "Sabtu", "Minggu",
        ];
        // echo date('N'); //get index hari
        $index_hari = date('N');

        echo $hari[$index_hari].", ";
        ?>
      </li>
      <li class="nav-item mt-2">
        <?php 
          function tgl_indo($tanggal){
            $bulan = array (
              1 => 'Januari', 'Februari', 'Maret', 'April',
              'Mei', 'Juni', 'Juli', 'Agustus',
              'September', 'Oktober', 'November', 'Desember'
            );

            $indo = explode('-', $tanggal);

            //variabel indo 0 = tanggal
            //variabel indo 1 = bulan
            //variabel indo 2 = tahun
            

            return $indo[2] . ' ' . $bulan[ (int)$indo[1] ]. ' ' . $indo[0];
          }

          echo tgl_indo(date('Y-m-d'));
        ?>
      </li>
      <li class="nav-item mt-2 ml-2" id="time"><script src="../assets/js/time.js"></script></li>
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
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Customer
                   <!--<span class="right badge badge-danger">New</span>-->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../vendor/view-vendor.php" class="nav-link">
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
            <h1 class="m-0">Edit Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title">Edit Data Produk</h2>
                    </div>
                    <form action="../crud/edit.php" method="post" enctype="multipart/form-data">

                      <?php
                        include 'koneksi.php';
                        $product_code = $_GET['product_code'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM products WHERE product_code='$product_code' ");
                        $data = mysqli_fetch_assoc($sql);
                      ?>
                  <div class="card-body">
                        <div class="form-group">
                            <label>Kode Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['product_code']; ?>" name="product_code" readonly>
                        </div>
                        <div class="form-group">
                            <label>Kategori Produk</label> <br>
                            <select name="category_id" class="form-control" value="<?php echo $data['category_id']; ?>">
                              <option>-- Pilih Kategori --</option>
                              <option <?php if ($data['category_id'] == 1) { echo "selected=\selected\""; }?> value="1">Sports</option>
                              <option <?php if ($data['category_id'] == 2) { echo "selected=\selected\""; }?> value="2">Daily</option>
                              <option <?php if ($data['category_id'] == 3) { echo "selected=\selected\""; }?> value="3">Accessoris</option>
                              <option <?php if ($data['category_id'] == 4) { echo "selected=\selected\""; }?> value="4">Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['product_name']; ?>" name="product_name" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['description']; ?>" name="description" required>
                        </div>
                        <div class="form-group">
                            <label>Harga Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['price']; ?>" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Diskon Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['discount_amount']; ?>" name="discount_amount" required>
                        </div>
                        <div class="form-group">
                            <label>Stok Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['stock']; ?>" name="stock" required>
                        </div>
                        <div class="form-group">
                            <label>Upload Gambar Produk</label>
                            <input type="file" class="form-control" name="image[]" accept=".jpg, .jpeg, .png, .gif" multiple><br><br>
                            <?php
                            foreach(json_decode($data['image']) as $i) :
                            ?>
                            <img src="../crud/img/<?php echo $i; ?>" width="100">
                            <input type="hidden" name="imagelama" value="<?php echo $i; ?>">
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                          <div class="col text-center">
                              <button type="button" class="btn btn-blok btn-danger btn-lg-3" onclick="history.go(-1);">Batal</button>
                              <button type="submit" class="btn btn-blok btn-primary btn-lg-3" name="simpan">Simpan Data</button>
                          </div>
                        </div>
                  </div>
                    </form>
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
