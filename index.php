<?php
    require_once "Routes.php";
    require_once CORE . "Config.php";
    require_once CORE . "Bootstrap.php";
    require_once CORE . "Controller.php";
    require_once CORE . "Database.php";
    require_once CORE . "Model.php";
    require_once CORE . "Registro.php";
    require_once CORE . "Request.php";
    require_once CORE . "Sessions.php";
    require_once CORE . "View.php";

    try{
        Bootstrap::run(new Request);
    }
    catch (Exception $e){
        echo "Ha ocurrido el siguiente Error: " . $e->getMessage() . " con código de Error Nro: " . $e->getCode();
    }
?>