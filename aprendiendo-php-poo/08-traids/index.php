<?php

    trait Utilidades{
        public function mostrarNombre()
        {
            echo "<h1>El nombre es ".$this->nombre."</h1>";
        }
    }

    class Coche{
        public $nombre;
        public $marca;

        use Utilidades;
    }

    class Persona{
        public $nombre;
        public $apellido;
        
        use Utilidades;
    }

    class VideoJuego{
        public $nombre;
        public $year;

        use Utilidades;
    }

    $coche=new Coche();
    $coche->nombre="Ferrari Aventador";

    $persona=new Persona();
    $persona->nombre="Sebastian";

    $videoJuego=new VideoJuego();
    $videoJuego->nombre="F1";


    var_dump($coche);
    $coche->mostrarNombre();

    $persona->mostrarNombre();

    $videoJuego->mostrarNombre();

?>