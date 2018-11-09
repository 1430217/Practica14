<?php
    class MvcController{
        
        public function pagina(){
            include 'views/template.php';
        }
    
        public function enlacesPaginasController(){
            if(isset($_GET['action'])){
                $enlaces = $_GET['action'];
            }else{
                $enlaces = 'index';
            }
            $respuesta = EnlacesPagina::enlacesPaginasModel($enlaces);
            include $respuesta;
        }

        public function loginController(){
            if (isset($_POST['username'])) {
                $usuario = array('username' => $_POST['username'],
                                'password' => $_POST['password']
                );
                //Recibe el usuario como un array y el nombre de la tabla
                $stmt = Datos::loginModel($usuario, 'usuarios');
                
                //Si los datos coinciden con los de la base de datos entonces se inicia la sesion
                if($_POST['username'] == $stmt['username']){ 
                    //Comprobar la contraseña cifrada de la base de dartos con la del formulario
                    if(($_POST['password'] == $stmt['password'])){ 
                        //Se inicia la sesion y se redirecciona al listado de usuarios
                        session_start();
                        $_SESSION['sesion'] = true;
                        $_SESSION['usuario'] = $_POST['username'];
                        header('location: index.php');
                    }
                } 
                else 
                    echo '<script text/javascript> alert ("Hubo un error al inciar sesión"); </script>';
            }
        }

        public function addUsuariosController(){
            if(isset($_POST['nombre_usuario'])){
                $usuario = array(
                    'nombre_usuario' => $_POST['nombre_usuario'],
                    'username' => $_POST['username'],
                    'correo' => $_POST['correo'],
                    'password' => $_POST['password']
                );

                $stmt = Datos::addUsuarios($usuario, 'usuarios');

                if($stmt === 'success')
                    header('Location: index.php');
                else
                    echo '<script text/javascript> alert("Hubo un error"); </script>';
            }
        }

        public function addPremiosController(){
            if(isset($_POST['nombre_premio'])){

                $premio = array(
                    'nombre_premio' => $_POST['nombre_premio'],
                    'descripcion' => $_POST['descripcion']
                );

                $stmt = Datos::addPremiosModel($premio, 'premios');

                if($stmt === 'success')
                    header('Location: index.php?action=premios');
                else
                    echo '<script text/javascript> alert("Hubo un error al añadir un nuevo premio"); </script>';

            }
        }

        public function getPremiosController(){
            $stmt = Datos::getPremios('premios');
            return $stmt;
        }
    
    }

?>