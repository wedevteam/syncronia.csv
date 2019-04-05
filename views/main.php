



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

    <title>Syncronia | Dashboard</title>

    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/animate.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/style.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
                            <span class="block m-t-xs font-bold"><?php echo $_SESSION['user_data']['nome'];?></span>
                            <span class="text-muted text-xs block"><?php if($_SESSION['user_data']['tipo']==='A'){
                                echo "Amministratore";
                                }else{ echo "Cliente";}?></span>
                        </a>
                    </div>
                    <div class="logo-element">
                        CSV
                    </div>
                </li>


                <!-- MENU ITEMS -->
                <li class="active">
                    <a href="<?php echo ROOT_URL.ROOT_PATH?>templates"><i class="fa fa-th-large"></i> <span class="nav-label">Templates</span></a>
                </li>
                <?php if($_SESSION['user_data']['tipo']==='U'):?>
                <li>
                    <a href="layouts.html"><i class="fa fa-user-circle"></i> <span class="nav-label">Files CSV</span></a>
                </li>
                <?php endif;?>
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
                        <span class="m-r-sm text-muted welcome-message">Benvenuto in SYNCRONIA / CSV feature</span>
                    </li>

                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>

                </ul>

            </nav>
        </div>


        <?php require ($view);?>

        <div class="footer">
            <div class="float-right">
                <a>Powered by <strong>Wedev</strong></a>
            </div>
            <div>
                <strong>Copyright</strong> Syncronia &copy; 2019
            </div>
        </div>
    </div>

</div>

<!-- Mainly scripts -->
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/popper.min.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/bootstrap.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



<!-- Custom and plugin javascript -->
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/inspinia.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/jquery-ui/jquery-ui.min.js"></script>



<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>
</body>
</html>

