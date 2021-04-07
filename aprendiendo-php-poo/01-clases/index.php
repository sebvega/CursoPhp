<?php 

//definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)
class Coche{
// atributos o propiedades (lo que eran las variables)

public $color="rojo";
public $marca="ferrari";
public $modelo="aventador";
public $velocidad=300;
public $potencia=500;
public $plazas=2;

//metodos, son acciones que hace el objeto (funciones)

public function getColor(){
    // busca en esta clase la propiedad ->
    return $this->color;
}
public function setColor($color){
    $this->color=$color;
}
public function setModelo($modelo){
    $this->modelo=$modelo;
}

public function acelerar(){
    $this->velocidad++;
}
public function frenar(){
    $this->velocidad--;
}
public function getVelocidad(){
    return $this->velocidad;
}

}//fin de la clase

//crear un objeto / instanciar la clase

$coche = new Coche();

//usar un metodo

echo $coche->getVelocidad();

$coche->setColor('amarillo');
echo "ell color del coche es: ".$coche->getColor()."<br>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "la velocidad del coche es: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2 -> setModelo('gallardo');
var_dump($coche);
var_dump($coche2);
?>

