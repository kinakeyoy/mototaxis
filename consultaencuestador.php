<?php
    require("conector.php");
    $conn = new ConectorBD();
    $conn->initConexion("mototaxis");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnostico de Caracterizacion SocieEconomica</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/misestilos.css" rel="stylesheet" media="screen">  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
    <!-- librerías SwetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <header>
        <div class="container">
            <br>
            <img width="100%" src="img/banner-f.png">
            <h3>Diagnostico de Caracterizacion SocieEconomica</h3>
                <h3>Diagnostico de Caracterizacion SocieEconomi</h3>
        </div>
    </header>
<!-- Navbar Menu inicio -->

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    MotoSoft-<strong>Encuestador</strong>
                </a>

                <ul class="navbar-nav  nav-tabs mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " href="encuestador1.php">
                            <h5>Nuevo</h5>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="consultaencuestador.php"><h5>Consulta</h5></a>
                    </li>           
                  
                  
                  
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="index.html" role="button"><h5>Cerrar Sesion</h5></a>
                    </li>
                </ul>             
            </div>
        </nav>
    </div>

    <!-- Navbar Menu fin -->
</head>

<body>
    <script type="text/javascript">
        var perfil = localStorage.getItem("perfil");
        if (perfil != 3) {
            console.log('Diferente de 3');
            console.log(perfil);
            swal("ERROR !!", "Modulo Restringido para su usuario");
            window.location.href = "index.html";
        }
        else {
            console.log('else perfil');
            console.log(perfil);
        }
    </script>
    <div class="container">
        <br>
        <!-- form busqueda x cedula-->
        <form action="consultarccencuestador.php" method="POST">
        <div class="form-row ">
            <label class="control-label col-md-4" for="nombre">
                <h4> Digite Cedula de Ciudadano:</h4>
            </label>
            <div class="col-md-4">
                <input class="form-control" type="number" placeholder="CC" name="cc" id="cc" required>
            </div>
              <div class="col-md-4">
           <button type="submit"  class="btn btn-primary btn-lg btn-block">Buscar</button>
             </div>
       
            </div>
       </form>
        <!-- Search form -->        

        <!-- 

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js "></script>
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js "></script>
</body>

</html>