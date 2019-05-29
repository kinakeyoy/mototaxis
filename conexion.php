<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "mototaxis";
   $conexion = new mysqli($server, $user, $pass, $db);
   mysqli_set_charset($conexion,"utf8");

?>
