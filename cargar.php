<?php
include 'conexion.php';
$nombreform=$_POST['nombre']; 
$ccform=$_POST['cc'];
$celularform=$_POST['celular'];
$generoform=$_POST['genero'];
$edadform=$_POST['edad'];
$estadocivilform=$_POST['estadocivil'];
// $lugarnacimientoform=$_POST['lugarnacimiento'];

if ($conexion){
	echo "<div display='none'>
    <script type='text/javascript'>
        console.log('Conectado a base de datos desde cargar');
    </script>
</div>";
// mysql_select_db($db);
/* insertamos el registro para cada tabla */
$inserciondatos="INSERT INTO personas (cedula,nombre,celular,genero,edad,estado_civil) VALUES ('$ccform', '$nombreform', '$celularform', '$generoform', '$edadform', '$estadocivilform')";
		if(mysqli_query($conexion,$inserciondatos))
		{
			echo '<!DOCTYPE html>
				  <html lang="en">
				  <head>
    				<meta charset="utf-8">
    				<meta http-equiv="X-UA-Compatible" content="IE=edge">
    				<meta name="viewport" content="width=device-width, initial-scale=1">
    				<title>Diagnostico de Caracterizacion SocieEconomica</title>    
    				<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
				  </head>
				  <body>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Datos Agregados!</strong> 
					<a href="nuevoadmin.php">
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
  						</button>
					</a>
					</div>
				  </body>
				  </html>';

}
else{
	echo 
"<div display='none'>
    <script type='text/javascript'>
        console.log('Else de no inserto datos');
    </script>
</div>";
}



}else
{
 echo "<div display='none'>
    <script type='text/javascript'>
        console.log('No se Conecto a base de datos desde cargar');
    </script>
</div>";
}
		
	
		


// mysqli_free_result($result); // Liberamos los registros
mysqli_close($conexion); // Cerramos la conexion con la base de datos
?>