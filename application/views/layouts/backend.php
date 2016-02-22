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

<body class="pace-done mini-navbar">

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
                    <a href="<?=base_url()?>" target="_blank"><i class="fa fa-cloud"></i> <span class="nav-label">Portada</span></a>
                </li>                
                <li>
                    <a href="<?=base_url('backend')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>                
                <li>
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Contenido</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=base_url()?>"><i class="fa fa-paper-plane-o"></i> Agregar Post </a></li>
                        <li><a href="<?=base_url()?>"><i class="fa fa-tag"></i> Taxonomias</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url()?>"><i class="fa fa-database"></i> <span class="nav-label">Galería </span><span class="label label-warning pull-right">200</span></a>

                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Buscas algo?" class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><i class="fa fa-user"></i> <?=ucwords($this->session->userdata('nombre'))?></span>
                </li>
                <li>
                    <a href="<?=base_url('backend-logout')?>">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        <?=$content_for_layout; ?>

        <div class="footer">
            <div class="pull-right">
                David Chávarri <strong> <i class="fa fa-twitter"></i> @xavarri</strong>
            </div>
            <div>
                <strong>CodeIgniter 3 + INSPINIA 2.0 + BOOTSTRAP 3</strong> &copy; 2016
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


    <script src="<?=base_url('public/backend/inspinia/js/plugins/chosen/chosen.jquery.js')?>"></script>

    <script src="<?=base_url('public/backend/inspinia/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <script src="<?=base_url('public/backend/inspinia/js/plugins/switchery/switchery.js')?>"></script>

    <!-- IonRangeSlider -->
    <script src="<?=base_url('public/backend/inspinia/js/plugins/ionRangeSlider/ion.rangeSlider.min.js')?>"></script>

    <!-- iCheck -->
    <script src="<?=base_url('public/backend/inspinia/js/plugins/iCheck/icheck.min.js')?>"></script>

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


</body>

</html>
