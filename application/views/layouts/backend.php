<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CODEIGNITER 3 QUICK DEPLOYMENT 1.0 | BACKEND</title>

    <link href="<?=base_url('public/backend/inspinia/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/inspinia/font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/inspinia/css/animate.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/inspinia/css/plugins/chosen/chosen.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/inspinia/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/inspinia/css/style.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/backend/css/custom.css')?>" rel="stylesheet">
    <script src="<?=base_url('public/backend/inspinia/js/jquery-2.1.1.js')?>"></script>

    <link rel="icon" href="<?=base_url('public/backend/img/favicon_3.ico')?>" type="image/gif">

    <?=$this->layout->css; ?>
    <?=$this->layout->js; ?>

</head>

<body class="mini-navbar">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="<?=base_url('public/backend/img/profile_small.jpg')?>" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Chávarri</strong>
                                 </span> <span class="text-muted text-xs block">Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Perfil</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            CN3+
                        </div>
                    </li>              
                    <li>
                        <a href="<?=base_url('backend')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>                
                    <li>
                        <a href="<?=base_url('articulos')?>"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Artículos</span><span class="fa arrow"></span></a>
                    </li>                
                    <li>
                        <a href="<?=base_url('usuarios')?>"><i class="fa fa-users"></i> <span class="nav-label">Artículos</span><span class="fa arrow"></span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="">
                            <div class="form-group">
                                <input type="text" placeholder="Buscar contenido..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                        </li>
                        <li><a href="<?=base_url() ?>"><i class="fa fa-cloud"></i></a></li>
                        <li><a href="<?=base_url('logout') ?>"><i class="fa fa-sign-out"></i> Salir</a></li>
                    </ul>

                </nav>
            </div>

            <div class="wrapper wrapper-content animated fadeIn">

                <?=$content_for_layout; ?>

            </div>

            <div class="footer">
                <div class="pull-right">
                    davidchavarri.info
                </div>
                <div>
                    David Chávarri &copy; 2016 
                </div>
            </div>
        </div>

    </div>

    <!-- Mainly scripts -->
    
    <script src="<?=base_url('public/backend/inspinia/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>

    <!-- Data Tables -->
    <script src="<?=base_url('public/backend/inspinia/js/plugins/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/dataTables/dataTables.bootstrap.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/dataTables/dataTables.responsive.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/dataTables/dataTables.tableTools.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url('public/backend/inspinia/js/inspinia.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('public/backend/inspinia/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>


    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</body>
</html>