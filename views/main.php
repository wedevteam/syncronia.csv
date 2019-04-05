



<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.9.2
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/theme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="assets/theme/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="assets/theme/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="assets/theme/css/animate.css" rel="stylesheet">
    <link href="assets/theme/css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">
    <!-- MENU -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">

                <!-- MENU HEADER -->
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="assets/theme/img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Giovanni di Serio</span>
                            <span class="text-muted text-xs block">Amministratore</span>
                        </a>
                    </div>
                    <div class="logo-element">
                        ASPIS
                    </div>
                </li>


                <!-- MENU ITEMS -->
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-user-circle"></i> <span class="nav-label">Clienti</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Fornitori</span></a>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-product-hunt"></i> <span class="nav-label">Classi Prodotti </span></a>
                </li>
                <li>
                    <a href="metrics.html"><i class="fa fa-list"></i> <span class="nav-label">Categorie Prodotti</span>  </a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Prodotti</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Acquisti</span></span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-edit"></i> <span class="nav-label">Account</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistiche</span></a>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding: 20px">
                        <span class="m-r-sm text-muted welcome-message">Benvenuto in ASPIS</span>
                    </li>

                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>

                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">

               <?php require ($view);?>

            </div>
        </div>
        <div class="footer">
            <div class="float-right">
                <a>Powered by <strong>Wedev</strong></a>
            </div>
            <div>
                <strong>Copyright</strong> Apis &copy; 2014-2018
            </div>
        </div>
    </div>

</div>

<!-- Mainly scripts -->
<script src="assets/theme/js/jquery-3.1.1.min.js"></script>
<script src="assets/theme/js/popper.min.js"></script>
<script src="assets/theme/js/bootstrap.js"></script>
<script src="assets/theme/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/theme/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="assets/theme/js/plugins/flot/jquery.flot.js"></script>
<script src="assets/theme/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/theme/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="assets/theme/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="assets/theme/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="assets/theme/js/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/theme/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="assets/theme/js/inspinia.js"></script>
<script src="assets/theme/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="assets/theme/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="assets/theme/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="assets/theme/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="assets/theme/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="assets/theme/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="assets/theme/js/plugins/toastr/toastr.min.js"></script>


<script>

</script>
</body>
</html>

