<?php
    namespace MisClases;
    
    class Usuario{
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre="sebastian";
            $this->email="sebas@sebas.com";
        }
    }
?>