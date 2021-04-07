<?php
    require_once './configuracion.php';

    Configuracion::setColor("blue");
    Configuracion::setEntorno("localhost");
    Configuracion::setNewLetter(true);
    echo Configuracion::$color.'<br>';
    echo Configuracion::$entorno.'<br>';
    echo Configuracion::$newLetter.'<br>';
    $configura=new Configuracion();
    $configura::$color="red";
    echo $configura::$color;
    var_dump($configura); 
?>