<?php
class MvcController{
  public function inicioSesion()
	{
		include "views/modules/login.php";
	}
// llamada a la plantilla

	public function header()
	{
		include "../../views/src/full-header.php";
	}
	public function panel()
	{
		include "../../views/src/panel.php";
	}
		public function footer()
	{
		include "../../views/src/full-footer.php";
	}

	public function enlacesPaginasController(){
		$enlacesController=$_GET["action"];
		$respuesta= EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}
}
 ?>
