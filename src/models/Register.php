<?php
//código de login para conectar a la base de datos mediante el archivo "connect.php" en la carpeta "config". Se recomienda usar "prepare()" para evitar inyecciones SQL.
namespace Luiscv\Idp\models;
use Luiscv\Idp\models\Connection;

$name = $_POST['Name'];
$sex = $_POST['Sex'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$passConf = $_POST['PasswordConfirm'];