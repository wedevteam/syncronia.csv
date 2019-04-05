<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SYNCRONIA | Login</title>

    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/animate.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">CSV</h1>

        </div>
        <h3>Benvenuto in Syncronia</h3><br/>
       <!-- --><?php
/*            foreach ($viewmodel as $item){
                echo '<br/>'.$item['userID'].'.'.$item['nome'];
            }
        */?>

        <form method="POST" >
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Inserisci Email" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Inserisci Password" required="">
            </div>
            <input type="submit" name="submit" value="Login" class="btn btn-primary block full-width m-b">
            <?php Messages::displayMsg()?>

        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/popper.min.js"></script>
<script src="<?php echo ROOT_URL.ROOT_PATH?>assets/theme/js/bootstrap.js"></script>

</body>

</html>
