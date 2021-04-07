<?php
    // include_once './clases/categoria.php';
    // include_once './clases/entrada.php';
    // require_once './clases/usuario.php'; 
    require_once './autoload.php';//este remplaza a todas estas que son clases


    // $usuario=new Usuario();
    // echo $usuario->nombre;
    // $categotia=new Categoria();
    // echo $categotia->descripcion;


    //espacios de nombres y paquetes
    use MisClases\Usuario;
    use MisClases\Categoria;
    use MisClases\entrada;
    use PanelAdministrador\Usuario as UsuarioAdmin;

    class Principal{
        public $usuario;
        public $categotia;
        public $entrada;

        public function __construct()
        {
            $this->usuario=new Usuario();
            $this->categoria=new Categoria();
            $this->entrada=new Entrada();
        }
        public function informacion()
        {
            echo __METHOD__;
        }
    }

    $usuario=new UsuarioAdmin();
    var_dump($usuario);
    
    $principal=new Principal();
    var_dump($principal->usuario);
    $principal->informacion();

    //comprobar si existe una clase

    $clase=class_exists('MisClases\Usuario');
    if ($clase) {
        echo "<h1>la clase existe</h1>";
    }else {
        echo "<h1>la clase no existe</h1>";
    }

    //comprobar si existe un metodo
    $metodos=(get_class_methods($principal));
    $busqueda=array_search('__construct', $metodos);
    var_dump($busqueda);

?>