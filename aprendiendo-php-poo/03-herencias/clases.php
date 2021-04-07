<?php
//herencia: la posibilidad de compartir atributos y metodos entre clases
    class Persona{
        public $nombre;
        public $apellidos;
        public $altura;
        public $edad;

        public function __construct (){
            $nombre;
            $apellidos;
            $altura;
            $edad;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getApellido(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos= $apellidos;
        }
        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura= $altura;
        }
        public function getEdad(){
            return $this->edad;
        }

        public function setEdad($edad){
            $this->edad= $edad;
        }

        public function hablar(){
            return "estoy hablando";
        }
        public function caminar(){
            return "estoy caminando";
        }
        

    }
    class Informatico extends Persona{

        public $lenguajes;
        public $experienciaProgramando;
        public function __construct()
        {
            $this->lenguajes="HTML, CSS, JS";
            $this->experienciaProgramando= 10;
        }

        public function sabeLenguajes($lenguajes)
        {
            $this->lenguajes=$lenguajes;
            return $this->lenguajes;
        }
        public function programar(){
            return "soy programador";
        }
        public function repararOrdenador(){
            return "reparar ordenador";
        }
        public function hacerOfimatica(){
            return "estoy escribiendo en word";
        }
    }
    
    class TecnicoRedes extends Informatico{
        
        public $auditarRedes;
        public $experienciaRedes;
        public function __construct()
        {
            parent::__construct();
            $this->auditarRedes='experto';
            $this->experienciaRedes=5;
        }
        public function auditarRedes()
        {
            return "estoy auditando  una red";
        }
    }

?>