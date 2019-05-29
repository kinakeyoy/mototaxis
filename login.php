<?php
   include("conexion.php"); 

    $peticionUsuario = "select * from usuarios";
    $resultadoUsuario = mysqli_query($conexion, $peticionUsuario);
    $array = array();
    while($fila = mysqli_fetch_array($resultadoUsuario)){
    $array[] = $fila;
    }
   
   echo json_encode($array);