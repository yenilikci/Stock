<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=PLUGINS_PATH;?>/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=CSS_PATH;?>/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">

<!-- /.login-box -->
<div class="login-box">
    <div class="login-logo">
        <a href="<?=SITE_URL?>"><b>Stock</b>Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Oturum Açma Ekranı</p>

            <form action="<?=SITE_URL?>/login/send" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Şifre      " name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- /.social-auth-links -->


        </div>
    </div>
</div>



<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=PLUGINS_PATH;?>/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=PLUGINS_PATH;?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=JS_PATH?>/adminlte.min.js"></script>
</body>
</html>

