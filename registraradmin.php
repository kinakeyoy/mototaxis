<?php
require ("conexion.php");
$ccform=$_POST['cc']; 
$usuarioform=$_POST['usuario'];
$perfilform=$_POST['perfil'];
$contrasenaform=$_POST['contrasena'];
if ($conexion){
	

$inserciondatos="INSERT INTO usuarios (cedula_usuario,nom_usuario,id_perfil,Pass) VALUES ('$ccform', '$usuarioform', '$perfilform', '$contrasenaform')";
		if(mysqli_query($conexion,$inserciondatos))
		{
          if($perfilform==2){
            echo'<script type="text/javascript">
                 alert("Administrador Guardado con Exito");    
                 window.location.href="crearadmin.html";
               </script>';
          }
          elseif($perfilform==3){
            echo'<script type="text/javascript">
                 alert("Encuestador Guardado con Exito");    
                 window.location.href="crearadmin.html";
               </script>';
          }
        }
        else
        {
          echo'<script type="text/javascript">
               alert("Verifique ");
               window.location.href="crearadmin.html";
               </script>';
        }
    }
        	


mysqli_close($conexion); // Cerramos la conexion con la base de datos
?>