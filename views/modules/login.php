<?php
 $login = new MvcController();
 $login-> loginUsuario();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">

    <title>iPhoneCenter- Inicio de Sesión</title>
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="src/css/bootstrap-extend.css">

	<link rel="stylesheet" href="src/css/master_style.css">

	<link rel="stylesheet" href="src/css/skins/_all-skins.css">

</head>
<body class="hold-transition bg-img" style="background-image:url(images/bg-2.jpg)" data-overlay=5>

	<div class="container pt-3 h-p100">
	  <div class="row h-p100 justify-content-sm-center align-items-center">
		<div class="col-sm-6 col-md-4">

		  <div class="card border-info text-center">
			<div class="card-header">
			  Iniciar Sesion para continuar
			</div>
			<div class="card-body">
			  <img src="images/avatar/logo.jpg" class="img-fluid rounded-circle w-150 mb-10">
			  <h4 class="text-center mb-20">iPhoneCenter</h4>

			  <form method="post">
  				<input type="email" name="email" class="form-control mb-2" placeholder="Email" required autofocus>
  				<input type="password" name="pass" class="form-control mb-2" placeholder="Password" required>
  				<button class="btn btn-lg btn-primary btn-block mb-20" type="submit">Iniciar Sesion</button>
  				  <div class="checkbox float-left">
  					<input type="checkbox" id="basic_checkbox_1" >
  					<label for="basic_checkbox_1">Recordarme</label>
  				  </div>
  				<a href="#" class="float-right">Necesitas Ayuda?</a>
			  </form>

			</div>
		  </div>
		  <a href="register.html" class="float-right text-white">Crear una cuenta</a>
		</div>
	  </div>
	</div>
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/vendor_components/sweetalert/sweetalert.min.js"></script>
  <script src="assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>

  <?php if (isset($_GET['action'])): ?>
    <?php if ($_GET['action'] =='error'): ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
         swal("Error!", "Datos de usuario incorrectos", "error");
      </script>
    <?php endif ?>
  <?php endif ?>
  
</body>
</html>
