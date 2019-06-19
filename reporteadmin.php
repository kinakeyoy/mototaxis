<?php
    require("conector.php");
    $conn = new ConectorBD();
    $conn->initConexion("mototaxis");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Diagnostico de Caracterizacion SocieEconomica</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="css/misestilos.css" rel="stylesheet" media="screen" />
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <header>
        <div class="container">
            <br />
            <img width="100%" src="img/banner-f.png" />
            <h3>Diagnostico de Caracterizacion SocieEconomica</h3>
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
                    MotoSoft-<strong>Administrador</strong>
                </a>

                <ul class="navbar-nav  nav-tabs mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " href="admin3.php">
                            <h5>Nuevo</h5>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaadmin.php"><h5>Consulta</h5></a>
                    </li>                  
                    <li class="nav-item active">
                        <a class="nav-link active" href="reporteadmin.php"><h5>Reporte</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crearencuestadoradmin.html"><h5>Crear Encuestador</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="index.html" role="button"><h5>Cerrar Sesion</h5></a>
                    </li>
                </ul>

                <!-- <form class="form-inline my-2 my-lg-0">
                    <a href="index.html">
                        <button class="btn btn-outline-danger my-2 my-sm-0">Cerrar Sesion</button>
                    </a>
                </form> -->
            </div>
        </nav>
    </div>

    <!-- Navbar Menu fin -->
</head>
</head>

<body>
    <script type="text/javascript">
        var perfil = localStorage.getItem("perfil");
        if (perfil != 2) {
            console.log('Diferente de 2');
            console.log(perfil);
            swal("ERROR !!", "Modulo Restringido para su usuario");
            window.location.href = "index.html";
        }
        else {
            console.log('else perfil');
            console.log(perfil);
        }
    </script>


    <?php
$reporteedad="SELECT edad from personas";
$resultadoedad=$conn->ejecutarQuery($reporteedad);
$conteo=0;
$sumatoria=0;
while($row=mysqli_fetch_array($resultadoedad))
{
    $sumatoria=$sumatoria+$row['edad'];
    $conteo++;
}
$promedio=round($sumatoria/$conteo);

$reporteingreso="SELECT ingresos_familiar from personas";
$resultadoingreso=$conn->ejecutarQuery($reporteingreso);
$conteoingreso=0;
$sumatoriaingreso=0;
while($row=mysqli_fetch_array($resultadoingreso))
{
$sumatoriaingreso=$sumatoriaingreso+$row['ingresos_familiar'];
$conteoingreso++;
}
$promedioingreso=round($sumatoriaingreso/$conteoingreso);

?>

    <div class="container">

        <button>Promedio de Edad
            <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-stats"> <?php echo "$promedio". " Años" ?></span>
            </a>
        </button>

        <button>Promedio de ingreso Familiar
            <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-stats"> <?php echo "$promedioingreso". " Pesos" ?></span>
            </a>
        </button>


    </div>








    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js "></script>
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js "></script>
</body>

</html>