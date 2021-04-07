<?php
require_once './clases.php';

$persona=new Persona();
// $persona->setNombre('sebas');
var_dump($persona);

$informatico =new Informatico();
// $informatico->setNombre('laura');
// $informatico->sabeLenguajes('ingles');
var_dump($informatico);

$tecnico=new TecnicoRedes();
var_dump($tecnico);


?>