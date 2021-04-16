<?php
    require_once '../vendor/autoload.php';

 //conexion a la base de datos
    $conexion= new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");

    //consulta a la base de datos

    $consulta=$conexion->query("SELECT * FROM notas");
    $num_elemet=$consulta->num_rows;
    $num_elem_page=2;

    var_dump($num_elemet);

    //hacer paginacion
    $pagination=new Zebra_Pagination();
    //numero total de elementos a paginar
    $pagination->records($num_elemet);

    //numero total de elementos por pagina
    $pagination->records_per_page($num_elem_page);
    $pagina=$pagination->get_page();
    $pagAct=(($pagina-1)*$num_elem_page);
    $notas= $conexion->query("SELECT * FROM notas LIMIT $pagAct, $num_elem_page");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    while ($nota=$notas->fetch_object()) {
        echo"<h1>{$nota->titulo}</h1>";
        echo"<h3>{$nota->descripcion}</h3><hr>";
    }
    $pagination->render();
?>