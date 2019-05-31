<?php
require ("conexion.php");

$nombreform=$_POST['nombre']; 
$ccform=$_POST['cc'];
$celularform=$_POST['celular'];
$generoform=$_POST['genero'];
$edadform=$_POST['edad'];
$estadocivilform=$_POST['estadocivil'];
$lugarnacimientoform=$_POST['lugarnac'];
$religionform=$_POST['religion'];
$barrioform=$_POST['barrio'];
$estratoform=$_POST['estrato'];
$personashogarform=$_POST['personashogar'];
$personascargoform=$_POST['personascargo'];
$personastrabajanform=$_POST['personastrabajan'];
$regimenseguridadsocialform=$_POST['regimenseguridadsocial'];
$epsform=$_POST['eps'];
$cotizapensionform=$_POST['cotizapension'];
$tiempopensionform=$_POST['tiempopension'];


if ($conexion){
	echo "<div display='none'>
    <script type='text/javascript'>
        console.log('Conectado a base de datos desde cargar');
    </script>
</div>";



/* insertamos el registro para cada tabla */
$inserciondatos="INSERT INTO personas (cedula,nombre,celular,genero,edad,estado_civil,id_municipio2,id_religion, id_barrio,estrato,personas_hogar,personas_cargo,personas_trabajan,seguridad_social,id_eps,cotiza_pension,tiempo_pension) VALUES ('$ccform', '$nombreform', '$celularform', '$generoform', '$edadform', '$estadocivilform','$lugarnacimientoform','$religionform','$barrioform','$estratoform','$personashogarform','$personascargoform','$personastrabajanform','$regimenseguridadsocialform','$epsform','$cotizapensionform','$tiempopensionform')";
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
					<a href="sadmin.php">
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
  						</button>
					</a>
					</div>
				  </body>
				  </html>';
			}			
			else{
					echo "No Inserto atos";
                }
			 } else{
             echo "No se Conecto a base de datos desde cargar";
			}

// mysqli_free_result($result); // Liberamos los registros
mysqli_close($conexion); // Cerramos la conexion con la base de datos
?>