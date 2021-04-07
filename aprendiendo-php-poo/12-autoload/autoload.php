<?php
    function app_autoloader($class){//o ponerle auto_cargar_clases
        require_once './clases/'.$class. '.php';
    }
    spl_autoload_register('app_autoloader');
?>