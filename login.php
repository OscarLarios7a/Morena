<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scale=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="container-form">
		<div class="header">			
				<div class="logo-title">
					<img src="img/usuario.png" alt="">
					<h2>CDEPO</h2>
				</div>
			<div class="menu">
				<a href="login.php"><li class="module-login active">Login</li></a>
				<a href="register_user.php"><li class="module-register">Registro</li></a>
			</div>
		</div>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="form" accept-charset="utf-8">
			<div class="welcome-form"><h1>Bienvenido</h1><h2>CDEPO</h2></div>
			<div class="user line-input">
				<label class="lnr lnr-user"></label>
				<input type="text"  placeholder="Nombre Usuario" name="usuario">
			</div>
			<div class="password line-input">
				<label class="lnr lnr-lock"></label>
				<input type="password"  placeholder="Contraseña" name="clave">
			</div>
			<?php if(!empty($error)): ?>
			<div class="mensaje">
				<?php echo $error; ?>
			</div>
			<?php endif;?>
			<button type="submit">Ingresar <label class="lnr lnr-chevron-right"></label></button>
		</form>
	</div>

	<!-- Seccion de JavaScript-->
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</body>
</html>