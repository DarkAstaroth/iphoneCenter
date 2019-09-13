<?php
class MvcController{
  public function inicioSesion()
	{
		include "views/modules/login.php";
	}
// llamada a la plantilla

	public function header()
	{
		include "fullHeader.php";
	}
	public function body()
	{
		include "body.php";
	}
		public function footer()
	{
		include "fullFooter.php";
	}

	public function enlacesPaginasController(){
		$enlacesController=$_GET["action"];
		$respuesta= EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}

      // registro de usuarios

      public function registroUsuarioController(){
        if (isset($_POST["email"])) {
          $datosControllerUsuario= array(
              'emails' => $_POST["email"]
            );
          $respuesta=datos::registroUsuarioModel($datosControllerUsuario,"usuario");

          if ($respuesta=="s") {
      				header("location:../pages/index.php?action=okusu");
      				ob_end_flush();

      		}
      		else{
      			header("../src/location:index.php");
      			ob_end_flush();
      		}
        }
    }

}
 ?>
