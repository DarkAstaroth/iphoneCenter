<?php

require_once("conexion.php");

class datos extends conexion{

  public function loginUsuarioModel($datosModel,$tabla){

				$db=new conexion();
				$stmt=$db->pdo->prepare(

					"SELECT email,pass
					FROM $tabla
					WHERE email=:email and pass=:pass");

				$stmt->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
				$stmt->bindParam(":pass",$datosModel["pass"],PDO::PARAM_STR);
				$stmt->execute();
				return $stmt->fetch();

	}

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

  public function validacionUsuarioModel($datosModel,$tabla){
    $db=new conexion();
    $stmt=$db->pdo->prepare("SELECT * FROM $tabla WHERE email=:email");
    $stmt->bindParam(":email",$datosModel["emails"],PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchColumn();
  }
}
