<?php
    require_once "conexion.php";

    class Datos extends Conexion{

        // Función para registrar usuarios
        public function addUsuarios($usuario, $tabla){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_usuario, username, correo, password) 
                VALUES (:nombre_usuario, :username, :correo, :password)"
            );

            $stmt->bindParam(':nombre_usuario', $usuario['nombre_usuario'], PDO::PARAM_STR);
            $stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);
            $stmt->bindParam(':correo', $usuario['correo'], PDO::PARAM_STR);
            $stmt->bindParam(':password', $usuario['password'], PDO::PARAM_STR);

            if($stmt->execute()) 
                return 'success';
            else  
                return 'error';    
            $stmt->close();
        }

        
        // Funcion para agregar premios
        public function addPremiosModel($premios, $tabla){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_premio, descripcion) VALUE (:nombre_premio, :descripcion)");
            
            $stmt->bindParam(':nombre_premio', $premios['nombre_premio'], PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $premios['descripcion'], PDO::PARAM_STR);

            if($stmt->execute())
                return 'success';
            else
                return 'error';
            $stmt->close();
        }


        //Funcion para el login
        public function loginModel($usuario, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT username, password FROM $tabla WHERE username = :username");
            $stmt->bindParam(':username', $usuario['username'], PDO::PARAM_STR);		
            $stmt->execute();
            return $stmt->fetch();

            $stmt->close();
        }


        // Funcion para traer los registros de la tabla premios
        public function getPremios($tabla){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close(); 
        }









    }

?>