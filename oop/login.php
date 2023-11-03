<?php
include 'function.php';

if (isset($_SESSION['id'])) {
    header("location: index.php");
}

$login = new Login();

if (isset($_POST['login'])) {
    $result = $login->login($_POST['username'], $_POST['password']);

    if ($result == 1) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = $login->idUser();
        header("location: index.php");
        // echo "<script> alert('Login Berhasil'); </script>";
    } elseif ($result == 10) {
        echo "<script> alert('password salah'); </script>";
    }

}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dengan Bootstrap dan PHP</title>
    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets-bootstrap/plugins/fontawesome-free/css/all.min.css">
    <!--Theme Style-->
    <link rel="stylesheet" type="text/css" href="../assets-bootstrap/css/adminlte.min.css">
</head>

<body>
    <div class="container">
        <!-- membuat card berada ditengah-->
        <div class="row justify-content-center">
            <div class="col-md-4 mt-4">
                <div class="card o-hidden border-0 shadow-lg my-1 mb-2">
                    <div class="card-body">
                        <!-- form login -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-2">
                                    <div class="text-center">
                                        <img src="../assets/images/Logo.jpg" alt="html logo" width="35%">
                                    </div>

                                    <br>
                                    <form action="" method="post">
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p><a href="./pages/register.php">Registrasi</a></p>
                                                </div>
                                                <div class="col-6">
                                                    <p><a href="#">Lupa Password ?</a></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <!-- <a href="pages/dashboard.php" style="background-color: #bc2edf;" class="btn mt-2 text-white">Masuk</a> -->
                                                <button type="submit" style="background-color: #bc2edf;" class="btn mt-2 text-white" name="login">Masuk</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="social-auth-links text-center">
                                        <p>- Masuk Dengan Akun Lain-</p>
                                        <a href="#" class="btn btn-block btn-primary">
                                            <i class="fab fa-facebook mr-2"></i> Facebook
                                        </a>
                                        <a href="#" class="btn btn-block btn-danger">
                                            <i class="fab fa-google mr-2"></i> Google
                                        </a>
                                        <a href="#" class="btn btn-block btn-success">
                                            <i class="fab fa-whatsapp mr-2"></i> Whatsapp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/js" src="../assets-bootstrap/js/AdminLTE.js"></script>
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
