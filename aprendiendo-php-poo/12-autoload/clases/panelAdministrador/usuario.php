<?php
    namespace PanelAdministrador;
    
    class Usuario{
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre="Antonio";
            $this->email="antonio@delaVega.com";
        }
    }
?>