<?php
$host_name="nombredelhost";
$host_db="nombredelabasededatos";
$host_user="nombredeusuario";
$host_pass="contraseña";

$db= null;
try {
    $db= new PDO("mysql:host=nombredelhost; dbname=nombredelabasededatos", $host_user, $host_pass);
} catch (PDOExcepction $e) {
    echo "Error en la conexión a la base de datos" . getMensaje();
    die();
}