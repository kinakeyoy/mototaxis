<?php
include 'conexion.php';
$usernamelg=$_POST['usernamelg']; 
$passwordlg=$_POST['passwordlg'];
$perfil=0;
if (!$conexion->error){
		
		$result=mysqli_query($conexion," SELECT * FROM usuarios");
		echo " ".$usernamelg."<br>".$passwordlg;
		echo "<br>";	
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
      echo "Datos incorrectos para login";
        break;
    case 1:
            header('Location: sadmin.html');
        break;
    case 2:
       header('Location: admin.html');
		break;
	case 3:
      header('Location: encuesta.html');
        break;
}


	

mysqli_free_result($result); // Liberamos los registros
mysqli_close($conexion); // Cerramos la conexion con la base de datos
echo "<hr>";
}
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