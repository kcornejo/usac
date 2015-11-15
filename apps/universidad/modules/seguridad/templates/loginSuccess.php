<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Acceso a Farmacia Integral</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/vendor/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/vendor/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page" style="background-image:url(/images/fondo3.jpg);background-size:cover;background-repeat: no-repeat">
        <div class="login-box">
            <div class="login-logo">
                
            </div><!-- /.login-logo -->
            <div class="login-box-body" stt>
                <center >
                    <img src="/vendor/dist/img/logo_farmacia.png" style="width:300px;margin-top:-5px"/>
                </center>
                <hr/>
                <p class="login-box-msg">Ingresa tus credenciales</p>
                <?php if ($form['clave']->getError()): ?>
                    <p class="login-box-msg" style="color:red">Credenciales incorrectas</p>
                <?php endif; ?>
                <form class="login-form" action="<?php echo url_for('seguridad/login') ?>" method="post">
                    <div class="form-group has-feedback">
                        <?php echo $form['usuario'] ?>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <?php echo $form['clave'] ?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div><!-- /.col -->
                    </div>
                    <?php echo $form->renderHiddenFields() ?>
                </form>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="/vendor/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="/vendor/plugins/iCheck/icheck.min.js"></script>
        <script src="/js/kenScript.js"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>