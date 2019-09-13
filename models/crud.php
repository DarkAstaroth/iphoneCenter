<?php

require_once("conexion.php");

class datos extends conexion{

  public function registroUsuarioModel($datosModel,$tabla){
				$db=new conexion();
				$stmt=$db->pdo->prepare(

					"INSERT INTO $tabla
					(email) VALUES
					(:idpersona)");

				$stmt->bindParam(":idpersona",$datosModel["emails"],PDO::PARAM_STR);

				if ($stmt->execute()) {
          
					return "s";
				}
				else{

					return "n";

				}

	}
}
