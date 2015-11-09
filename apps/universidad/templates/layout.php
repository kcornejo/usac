<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>USAC</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/vendor/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="/vendor/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/kenStyle.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="skin-blue layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">

                            <a href="<?php echo url_for('inicio/index') ?>" class="navbar-brand">
                                <img src="/vendor/dist/img/logo_farmacia.png" style="width:60px;margin-top:-5px"/>
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <?php echo sfContext::getInstance()->getUser()->getAttribute('menu', null, 'seguridad'); ?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        <img src="/vendor/dist/img/avatar5.png" class="user-image" alt="User Image" />
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        <span class="hidden-xs"><?php echo sfContext::getInstance()->getUser()->getAttribute('usuarioNombre', null, 'seguridad') ?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            <img src="/vendor/dist/img/avatar5.png" class="img-circle" alt="User Image" />
                                            <p>
                                                <?php echo sfContext::getInstance()->getUser()->getAttribute('usuarioNombre', null, 'seguridad') ?>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->

                                        <!-- Menu Footer-->
                                        <li class="user-footer">

                                            <div class="pull-right">
                                                <a href="<?php echo url_for('seguridad/logout') ?>" class="btn btn-default btn-flat">Cerrar Sesion</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-custom-menu -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <br/><br/>
                    <?php include_partial('inicio/avisos') ?>
                    <?php echo $sf_content ?>
                </div><!-- /.container -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.2.0
                    </div>
                    <strong>Copyright &copy; 2014-2015 USAC.</strong>
                </div><!-- /.container -->
            </footer>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="/vendor/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="/vendor/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="/vendor/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="/vendor/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="/vendor/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="/vendor/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- AdminLTE App -->

        <script src="/vendor/dist/js/app.min.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/vendor/dist/js/demo.js" type="text/javascript"></script>
        <script src="/js/kenScript.js" type="text/javascript"></script>

    </body>
</html>
