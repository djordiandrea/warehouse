<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <p><?php
        // ob_start();
        // system('getmac');
        // $Content = ob_get_contents();
        // ob_clean();
        // echo substr($Content, strpos($Content, '\\') - 20, 17);
        ?></p>
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Warehouse</b> Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form>
                    <!-- action="../../index3.html" method="post" -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="login-username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="login-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="button" class="btn btn-primary btn-block" id="btn-login">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.social-auth-links -->
                <br>
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.min.js"></script>

    <script src="<?php echo base_url() ?>/assets/js/global.js"></script>

    <script>
        $(document).ready(function() {
            console.log("ready!");

            $('#btn-login').click(function() {
                var username = $('#login-username').val();
                var password = $('#login-password').val();

                console.log(username);
                console.log(password);
                var data = {
                    username: username,
                    password: password
                }
                var url = "/login/submitLogin";
                global.ajaxPost(url, data, function(result) {
                    console.log(result);

                    if (result['logged_in'] == false) {
                        alert(result['alert']);
                        $('#login-password').val('');
                    } else {
                        window.location = base_url + result['url'];
                    }



                });
            });
        });
    </script>

</body>

</html>