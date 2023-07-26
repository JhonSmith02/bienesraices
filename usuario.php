<?php

//Importar la base de datos
include 'includes/config/database.php';
$db = conectarDB();

//Creando un email y un password
$email = "cuatrozero1@gmail.com";
$password = "12345";


//hasheando la contrasena
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Query para crear el usuario
$sql = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}')";

// echo $sql;


//Agregarlo a la base de datos

mysqli_query($db, $sql);
