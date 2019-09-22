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

  public function gPass(){
  $caracteres = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$#@!?=&';
    $caractereslong = strlen($caracteres);
    $clave = '';
    for($i = 0; $i < 10; $i++) {
      $clave .= $caracteres[rand(0, $caractereslong - 1)];
    }
      return $clave;
  }

  public function registroUsuarioModel($datosModel,$tabla){
          $gPass=datos::gPass();
          $db=new conexion();
          $stmt=$db->pdo->prepare(
            "INSERT INTO $tabla()
            VALUES (null,?,?,'3')
            ");

          $stmt->bindParam(1,$datosModel["emails"],PDO::PARAM_STR);
          $stmt->bindParam(2,$gPass,PDO::PARAM_STR);

				if ($stmt->execute()) {
					return $idpersona=$db->pdo->lastInsertId();
				}
				else{
					return null;
				}
	}

  public function registroPersonaModel($datosModel,$tabla){
          $db=new conexion();
          $stmt=$db->pdo->prepare(
            "INSERT INTO $tabla()
            VALUES (?,?,?,?,?,?,?)
            ");

          $stmt->bindParam(1,$datosModel["ci"],PDO::PARAM_STR);
          $stmt->bindParam(2,$datosModel["idusuario"],PDO::PARAM_STR);
          $stmt->bindParam(3,$datosModel["nombres"],PDO::PARAM_STR);
          $stmt->bindParam(4,$datosModel["paterno"],PDO::PARAM_STR);
          $stmt->bindParam(5,$datosModel["materno"],PDO::PARAM_STR);
          $stmt->bindParam(6,$datosModel["telefono"],PDO::PARAM_STR);
          $stmt->bindParam(7,$datosModel["dir"],PDO::PARAM_STR);

				if ($stmt->execute()) {
					return true;
				}
				else{
					return false;
				}
	}

  public function validacionUsuarioModel($datosModel,$tabla){
    $db=new conexion();
    $stmt=$db->pdo->prepare("SELECT * FROM $tabla WHERE email=:email");
    $stmt->bindParam(":email",$datosModel["emails"],PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->rowCount();
  }

  public function listaUsuarioModel($tabla){

				$db=new conexion();
				$stmt=$db->pdo->prepare(

					"SELECT u.*,p.*
					 FROM $tabla u, persona p
           WHERE u.idusuario=p.idusuario");
				$stmt->execute();
				return $stmt->fetchAll();

	}
}
