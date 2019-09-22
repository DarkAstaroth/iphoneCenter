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

            $idusuario=datos::registroUsuarioModel($datosControllerUsuario,"usuario");

            $datosControllerPersona= array(
              'idusuario' =>$idusuario,
              'nombres' => $_POST["nombres"],
              'paterno' => $_POST["paterno"],
              'materno' => $_POST["materno"],
              'ci' => $_POST["ci"],
              'telefono' => $_POST["telefono"],
              'nombres' => $_POST["nombres"],
              'dir' => $_POST["dir"]
              );

            if ($idusuario!=null) {

              $respuesta=datos::registroPersonaModel($datosControllerPersona,"persona");

              if ($respuesta) {

                header("location:../pages/index.php?action=okusu");
        				ob_end_flush();

              } else {
                header("location:../pages/index.php?action=erroru");
                ob_end_flush();
              }

        		}
        		else{
              header("location:../pages/index.php?action=erroru");
              ob_end_flush();
        		}
          }
          else {
            header("location:../pages/index.php?action=errormail");
            ob_end_flush();
          }

        }
    }

    public function listaUsuarioController(){

		$respuesta=datos::listaUsuarioModel("usuario");

		$array=array();
		foreach ($respuesta as $key => $value) {
			array_push($array,get_object_vars($value));
		}

		foreach ($array as $row => $item) {
      $estado="";
      if ($item["estado"]=='Activo') {$estado='badge-success';}
      if ($item["estado"]=='Bloqueado') {$estado='badge-danger';}
      if ($item["estado"]=='Pendiente') {$estado='badge-warning';}
			echo '<tr>
					<td>'.$item["idusuario"].'</td>
          <td>'.$item["ci"].'</td>
					<td>'.$item["email"].'</td>
					<td>'.$item["paterno"].' '.$item["materno"].' '.$item["nombres"].'</td>
					<td>'.$item["tipo"].'</td>
					<td><span class="badge badge-lg '.$estado.'">'.$item["estado"].'</span></td>
          <td>
                <a href="" data-toggle="tooltip" data-placement="top" title="Desbloquear"><i class="fa fa-unlock fa-2x" to> </i></a>
                <a href="" data-toggle="tooltip" data-placement="top" title="Bloquear"><i class="fa fa-lock fa-2x"> </i></a>
                <a href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil fa-2x"> </i></a>
                <a href="" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash fa-2x"> </i></a>
          </td>
				</tr>';
		}

	}

}
 ?>
