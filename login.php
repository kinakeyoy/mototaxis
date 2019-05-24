<?php
include 'conexion.php';
$usernamelg=$_POST['usernamelg']; 
$passwordlg=$_POST['passwordlg'];
$perfil=0;
if (!$conexion->error){
		
		$result=mysqli_query($conexion," SELECT * FROM usuarios");
		// echo " ".$usernamelg."<br>".$passwordlg;
		// echo "<br>";	
		while($row = mysqli_fetch_array($result))
		 {
       // $row es un array con todos los campos existentes en la tabla
		  if (($usernamelg==$row['nomusuario'])&&($passwordlg==$row['Pass']))
      {
			 $perfil=$row['id_perfil'];
		//   echo "<br>";	
		//   echo " Usuario Existe ";
		//   echo "<br>";	
		//   echo "Perfil: ".$row['id_perfil']."<br>";	
		  }
		}
		switch ($perfil) {
		case 0:
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
	<strong>Login Incorrecto!</strong> Verifique Credenciales.
	<a href="index.html">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	</a>
</div>
</body>
</html>';


	  //     echo'<script type="text/javascript">
    // alert("Datos De login Incorrectos");
    // window.location.href="index.html";
		// </script>';
	

        break;
    case 1:
        header('Location: sadmin.html');
        break;
    case 2:
        header('Location: nuevoadmin.html');
		    break;
	  case 3:
        header('Location: encuesta1.html');
        break;
}


	

mysqli_free_result($result); // Liberamos los registros
mysqli_close($conexion); // Cerramos la conexion con la base de datos
echo "<hr>";
}
return 
?>
<!-- // echo consulta();
// $mysqli->close();
// $usuarios=$mysqli->query("SELECT nom_usuario, id_perfil  FROM usuarios
//  WHERE nom_usuario='".$_POST['usuariolg']."' AND
//  pass='".$_POST[passlg]."'");
//  if($usuarios->num_rows==1):
//  $datos=$usuarios->fetch_assoc();
//  echo json_encode(array('error'=>false,'tipo'=>$datos['id_perfil']));
// else:
//  echo json_encode(array('error'=>true));
// endif;
// $row_result = mysqli_fetch_array($result);
// 	if (result){
// 		echo "otro mensaje dentro de row";
// 	}else{
// 		echo "El usuario o contrasena ingresados son incorrectos";
// 	}
// }else{
// 	echo "Error al tratar de conectarse a la base de datos ";
// }	
// echo json_encode($php_response); -->