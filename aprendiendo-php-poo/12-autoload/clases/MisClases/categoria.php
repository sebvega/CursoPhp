<?php
    namespace MisClases;
    
    class Categoria{
        public $nombre;
        public $descripcion;

        public function __construct()
        {
            $this->nombre="Accion";
            $this->descripcion="categoria enfocada a las review de videojuegos de accion";
        }
    }
?>