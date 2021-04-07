<?php 

//definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)
class Coche{
// atributos o propiedades (lo que eran las variables)


//podemos acceder a el desde cualquier lugar, dentro de la clase, dentro de clases que hereden esta clase
//o fuera de la clase
public $color;
                
//podemos acceder desde la clase que lo define y desde las clases que los hereden esta clase
protected $marca;

//unicamente se puede acceder desde esta clase
private $modelo;





public $velocidad;
public $potencia;
public $plazas;

public function __construct($color, $marca, $modelo, $velocidad, $potencia, $plazas){
    $this->color=$color;
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->velocidad=$velocidad;
    $this->potencia=$potencia;
    $this->plazas=$plazas;
}

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
public function getModelo(){
    return $this->modelo;
}
public function setMarca($marca){
    $this->marca=$marca;
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

public function mostrarInformacion(coche $miObjeto){
    
    $informacion = "<h1>Informacion del coche</h1>";
    $informacion .= "<br>color: ". $miObjeto->color;
    $informacion .= "<br>Modelo: ". $miObjeto->modelo;
    $informacion .= "<br>velocidad: ". $miObjeto->velocidad;
    return $informacion;
}

}//fin de la clase






?>