<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Farmacia Integral</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">


        <link href="/web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="/web/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <script src="js/scripts.js"></script>

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
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogo <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="">
                                            <a href="<?php echo url_for('usuario/index') ?>">
                                                <i class="fa fa-user"></i> <span>Usuarios</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('producto/index') ?>">
                                                <i class="fa fa-check"></i> <span>Producto</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('cliente/index') ?>">
                                                <i class="fa fa-users"></i> <span>Clientes</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('marca/index') ?>">
                                                <i class="fa fa-file-code-o"></i> <span>Marca</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('proveedor/index') ?>">
                                                <i class="fa fa-refresh"></i> <span>Proveedor</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('tipo_pago/index') ?>">
                                                <i class="fa fa-money"></i> <span>Tipo de Pago</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('tipo_producto/index') ?>">
                                                <i class="fa fa-check"></i> <span>Tipo de Producto</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('tipo_transaccion/index') ?>">
                                                <i class="fa fa-check"></i> <span>Tipo de Transaccion</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('tipo_usuario/index') ?>">
                                                <i class="fa fa-shield"></i> <span>Tipo de Usuario</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movimientos <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="">
                                            <a href="<?php echo url_for('inventario/index') ?>">
                                                <i class="fa fa-plus"></i> <span>Ingreso a Inventario</span> 
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo url_for('venta/index') ?>">
                                                <i class="fa fa-money"></i> <span>Venta</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="">
                                            <a href="<?php echo url_for('bitacora_cambios/index') ?>">
                                                <i class="fa fa-book"></i> <span>Bitacora de Cambios</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
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

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right" />
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="/web/vendor/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="/web/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/web/vendor/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/web/vendor/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="/web/vendor/dist/js/app.min.js" type="text/javascript"></script>
        <script src="/web/vendor/dist/js/demo.js" type="text/javascript"></script>
    </body>
</html>
