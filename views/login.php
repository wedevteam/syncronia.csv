<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SYNCRONIA | Login</title>

    <link href="assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/theme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/theme/css/animate.css" rel="stylesheet">
    <link href="assets/theme/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <h3>Benvenuto in Syncronia</h3>
        <form></form>
        <?php echo ROOT_URL.ROOT_PATH;?>
        <form class="m-t" role="form" action="<?php echo ROOT_URL.ROOT_PATH;?>users">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="assets/theme/js/jquery-3.1.1.min.js"></script>
<script src="assets/theme/js/popper.min.js"></script>
<script src="assets/theme/js/bootstrap.js"></script>

</body>

</html>
