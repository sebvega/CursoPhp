<?php
    class Usuario{
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre= "sebastian";
            $this->email= "sebas@sebas.com";
            echo "creando del objeto creado <br>";
        }

        public function __toString(){
            return "  hola {$this->nombre}, esta registrado con {$this->email}<br>";
        }

        public function __destruct()    //los destructores limpian el uso de una clase cuando el sistema detecta que ya se deja de usar 
        {
            echo " <br> destruyendo el objeto";
        }
    }
    $usuario=new Usuario();
    echo $usuario;
    echo $usuario->email;

    // for ($i=0; $i < 200; $i++) { 
    //     echo $i."<br>";
    // }
?>