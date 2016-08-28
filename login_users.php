<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patomar - Login</title>

    <!-- Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>
<?php
//echo password_hash('Spira123*', PASSWORD_DEFAULT);
?>
<body style="margin-top: 0px;">

	<div class="wrapper full-page-wrapper page-auth page-login text-center">
		<div class="inner-page">
			<div class="logo">
				<a><img src="images/patomar.png" alt=""></a>
			</div>
			
			<div class="login-box center-block">
				<form class="form-horizontal" role="form" action="lib/login.php" method="POST">
					<p class="title">Ingresa tus datos</p>
                    <?php if($_GET['e']>0){ ?>
                    <div class="aler alert-danger">Correo incorrecto</div>
                    <?php } if($_GET['p']>0){ ?>
                    <div class="aler alert-danger">Contraseña incorrecta</div>
                    <?php } if($_GET['i']>0){ ?>
                    <div class="aler alert-danger">Datos incorrectos!</div>
                    <?php } ?>
					<div class="form-group">
						<label for="username" class="control-label sr-only">Username</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="email" placeholder="Correo" name="username" class="form-control" required>
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<label for="password" class="control-label sr-only">Password</label>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								<input type="password" placeholder="password" name="password" class="form-control" required>
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					
                    <input name="view" type="text" class="hide" value="Autenticar" />
					<button type="submit" class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Entrar</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer navbar navbar-default navbar-fixed-bottom">© 2016 </footer>

</body>
</html>
