<?php


function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db){
        echo "Eror al intentar conectarse a la base de datos";
        exit;
    }

    return $db;
}