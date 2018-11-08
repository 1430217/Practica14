<?php
    require_once "conexion.php";

    class Datos extends Conexion{

        //Funcion para el login
        public function loginModel($usuario, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT username, password FROM $tabla WHERE username = :username");
            $stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);		
            $stmt->execute();
            return $stmt->fetch();

            $stmt->close();
        }
    }

?>