<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "mototaxis";
   $conexion = new mysqli($server, $user, $pass, $db);
//    mysqli_select_db($db,$conexion);
	if (!$conexion->error){     
        echo "conectado con base de datos";
        	echo "<br>";
    }
    else{
        echo "Error al tratar de acceder al servidor ";
        	echo "<br>";
	}

// $mysqli=new mysqli($server,$user, $pass, $db);
// if($mysqli):
//     echo "Error al conectarse con Mysql debido al error".$mysqli->connect_error;
// endif;
?>
