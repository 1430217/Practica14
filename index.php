<?php
    //session_start();
    ob_start(); //Se arregló el problema de headers
    require_once 'controllers/controller.php';
    require_once 'models/model.php';
    require_once 'models/crud.php';

    $mvc = new MvcController();
    $mvc->pagina();
?>

