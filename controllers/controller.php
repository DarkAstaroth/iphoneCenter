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

    public function loginUsuario(){

      if (isset($_POST["email"])) {

        $datosControllerLogin= array(  'email' => $_POST["email"],
                      'pass' => $_POST["pass"]
          );

        $respuesta=datos::loginUsuarioModel($datosControllerLogin,"usuario");
        $resultados = get_object_vars( $respuesta );

        if ($resultados["pass"] == $_POST["pass"] ) {
          session_start();
          $_SESSION["validar"]==true;
            header("location:src/pages/index.php?action=loginSuccess");
            ob_end_flush();
        }
        else{
          header("location:index.php?action=error");
          ob_end_flush();
        }

    }
  }


      // registro de usuarios

      public function registroUsuarioController(){
        if (isset($_POST["email"])) {
          $datosControllerUsuario= array(
              'emails' => $_POST["email"]
            );
          $validacion=datos::validacionUsuarioModel($datosControllerUsuario,"usuario");
          if ($validacion==0) {
            
            $respuesta=datos::registroUsuarioModel($datosControllerUsuario,"usuario");
            if ($respuesta==0) {
        				header("location:../pages/index.php?action=okusu");
        				ob_end_flush();

        		}
        		else{
              header("location:../pages/index.php");
              ob_end_flush();
        		}
          } else {
            header("location:../pages/index.php?action=errormail");
            ob_end_flush();
          }

        }
    }

}
 ?>
