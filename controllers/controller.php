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
}
 ?>
