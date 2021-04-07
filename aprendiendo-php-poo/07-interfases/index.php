<?php

    interface Ordenador{
        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfracmentar();
        public function detectarUSB();

    }

    class iMac implements Ordenador{
        public $modelo;

        public function getModelo()
        {
            return $this->modelo;
        }
        public function setModelo($modelo)
        {
            $this->modelo=$modelo;
        }
        
        public function encender(){
            ;
        }
        public function apagar(){
            ;
        }
        public function reiniciar(){
            ;
        }
        public function desfracmentar(){
            ;
        }
        public function detectarUSB(){
            ;
        }


    }
    $maquintos=new iMac();
    $maquintos->setModelo('MacBook pro 2040');
    echo $maquintos->getModelo();
    var_dump($maquintos);

?>