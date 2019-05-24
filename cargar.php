<?php
include 'conexion.php';
// $usernamelg=$_POST['usernamelg']; 
// $passwordlg=$_POST['passwordlg'];

if ($conexion){

echo "listo, conectado a base datos desde cargar php";
}
else
{
    echo"Verifique conexion";
}
		
	// 	// $result=mysqli_query($conexion," SELECT * FROM usuarios");
	// 	// echo " ".$usernamelg."<br>".$passwordlg;
	// 	// echo "<br>";	
	// 	while($row = mysqli_fetch_array($result))
	// 	 {
    //    // $row es un array con todos los campos existentes en la tabla
	// 	  if (($usernamelg==$row['nomusuario'])&&($passwordlg==$row['Pass']))
    //        {
	// 		 $perfil=$row['id_perfil'];
		
	// 	   }
	// 	 }
	
		


// mysqli_free_result($result); // Liberamos los registros
// mysqli_close($conexion); // Cerramos la conexion con la base de datos


return 
?>