<?php 
class EnlacesPagina{

    public function enlacesPaginasModel($enlaces){
        if($enlaces == 'login' || $enlaces == 'registro' || $enlaces == 'dashboard' || $enlaces == 'salir' || $enlaces == 'premios'
            || $enlaces == 'addPremios' || $enlaces == 'promociones' || $enlaces == 'addPromociones' || $enlaces == 'clima'){
                $module = 'views/modules/'.$enlaces.'.php';            
        }

        else if ($enlaces === 'index') { $module = 'views/modules/dashboard.php'; }
        else if($enlaces === "fallo"){ $module =  "views/modules/login.php"; } 
        /*else if ($enlaces === 'ok') {$module = 'views/modules/login.php';}
        else if($enlaces == "cambio"){ $module =  "views/modules/listaLibros.php"; } 
        else if($enlaces == "update"){ $module =  "views/modules/perfil.php"; }*/
        return $module;
    }
}
?>