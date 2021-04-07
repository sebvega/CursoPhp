<?php
require_once './coche.php';
$coche=new Coche("Amarillo","Renault","Clio",150,200,4);
$coche1=new Coche("Verde","ford","Fiesta",259,300,4);
$coche2=new Coche("Azul","Mazda","V2200",120,400,2);

$coche->color="Rosa";
//$coche->marca="audi";
$coche->setMarca("audi");
// var_dump ($coche->getModelo());

// var_dump($coche);

echo $coche->mostrarInformacion($coche1);

?>