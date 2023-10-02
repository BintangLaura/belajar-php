<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dengan Bootstrap dan PHP</title>
    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets-bootstrap/plugins/fontawesome-free/css/all.min/css">
    <!--Theme Style-->
    <link rel="stylesheet" type="text/css" href="assets-bootstrap/css/adminlte.min.css">
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
                                        <img src="assets/images/Logo.jpg" alt="html logo" width="35%">
                                    </div>

                                    <br>

                                    <form>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <p><a href="#">Lupa Password ?</a></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <a href="pages/dashboard.php" style="background-color: #bc2edf;" class="btn mt-2 text-white">Masuk</a>
                                                <!-- <button type="submit" style="background-color: #bc2edf;" class="btn mt-2 text-white">Masuk</button> -->
                                            </div>
                                        </div>
                                    </form>
                                    <div class="social-auth-links text-center mb-3">
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
    <script type="text/js" src="assets-bootstrap/js/AdminLTE.js"></script>
</body>