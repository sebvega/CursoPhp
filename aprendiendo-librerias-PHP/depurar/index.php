<?php
    require_once '../vendor/autoload.php';


    $frutas=array("manzanas","peras","bananos");
    $nombres=array("ejecutivo"=>"Antonio","empleado"=>"Federico");
    \FB::log($frutas);
    \FB::log($nombres);
    echo "hola mundo !!".$nombres['ejecutivo'];
    \FB::log("muestrame en consola");
?>