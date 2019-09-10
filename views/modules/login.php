<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>iPhoneCenter Log in</title>
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
			  <img src="images/avatar/2.jpg" class="img-fluid rounded-circle w-150 mb-10">
			  <h4 class="text-center mb-20">Mario Silva</h4>
			  <form action="src/pages/home.php" method="post" class="form-signin">
				<input type="email" class="form-control mb-2" placeholder="Email" required autofocus>
				<input type="password" class="form-control mb-2" placeholder="Password" required>
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
</body>
</html>