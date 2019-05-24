<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "mototaxis";
   $conexion = new mysqli($server, $user, $pass, $db);
//    mysqli_select_db($db,$conexion);
	if (!$conexion->error){     
echo 
"<div display='none'>
    <script type='text/javascript'>
        console.log('Conectado a base de datos');
    </script>
</div>";
    }
    else{
      "<div display='none'>
    <script type='text/javascript'>
        console.log('Error no conecto base de datos');
    </script>
</div>";
	}

// $mysqli=new mysqli($server,$user, $pass, $db);
// if($mysqli):
//     echo "Error al conectarse con Mysql debido al error".$mysqli->connect_error;
// endif;
?>
