<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Diagnostico de Caracterizacion SocieEconomica
    </title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <Center>
     <img class="img-fluid" src="img/banner1.png" alt="banner" > 
      </Center>
      <br>
      <br>
    <div class="container-fluid col-sm-7">       
      <div class="card shadow">
            <div class="card-header text-center text-muted">
                <b>Iniciar Sesión</b>
            </div>
            <div class="card-body">                               
                <form class="form-horizontal" role="form" method="POST" id="formlg" action="index.php">
                    <div class="row">                        
                        <div class="col-sm-3">
                            <label class="control-label col-form-label-sm">Usuario</label>
                        </div>
                        <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm text-lowercase" placeholder="Usuario" name="usernamelg" id="usernamelg" pattern="[^'\x22]+"
                            title="campo no valido" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="control-label col-form-label-sm">Contraseña</label>
                        </div>
                        <div class="col-sm-6">
                        <input type="password" class="form-control form-control-sm" id="passwordlg" name="passwordlg" placeholder="Contraseña"
                            pattern="[^'\x22]+" title="campo no valido" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-9">
                        <button type="submit" class="btn btn-default btn-sm btn-success col-sm-3" id="btnLogin">Inicar Sesion</button>
                        </div>
                    </div>
                </form>             
            </div>
    </div>

          
            <br>
 <?php
   include("conexion.php"); 
   $bandera=2;
   if (isset($_POST['usernamelg'], $_POST['passwordlg']))
   {
        $userform=$_POST['usernamelg']; 
        $passform=$_POST['passwordlg'];
        $peticionUsuario = "select * from usuarios";
        $resultadoUsuario = mysqli_query($conexion, $peticionUsuario);
        $bandera=mysqli_num_rows($resultadoUsuario);  
            while($fila = mysqli_fetch_array($resultadoUsuario))
            {
                $bandera--;
                if(($userform==$fila['nom_usuario']) and ($passform==$fila['Pass'])) 
                    {
                        
                        echo "<br>";
                        echo "login correcto";
                        if($fila['id_perfil']==1) 
                        {   
                            header("location: sadmin.php");     
                            break;          
                        }
                        if($fila['id_perfil']==2)
                        {           
                            header("location: admin3.php"); 
                            break;
                        }
                        if($fila['id_perfil']==3)
                        {
                            header("location: encuestador1.php"); 
                            break;
                        }
                    }
           }          
    }
   if($bandera==0)
   {    
   echo "<div class='container-fluid'>
   <div class='alert alert-danger' role='alert'>
        <center><strong>Error de Sesion!</strong> Usuario o contraseña Incorrecta.</center>
        </div> </div>";    
   } 
?>
            
        </div>

        <br>
        <br>
        <br>
        <a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>
    </div>

   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    </div>


</body>

</html>