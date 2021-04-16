<?php

    require_once '../vendor/autoload.php';

    $foto_original='montanas.jpg';
    $guardar_en= 'fotomodificada.jpg';


    $thumb = new PHPThumb\GD($foto_original);
    ob_clean();
    $thumb->resize(500,500);

    $thumb->crop(50,50,120,120);

    $thumb->show();
    $thumb->save($guardar_en);
?>