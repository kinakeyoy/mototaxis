<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    </meta>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>

    <title>
        Diagnostico de Caracterizacion SocieEconomica
    </title>

    <!-- CSS de Bootstrap -->
    <script src="/js/jquery-3.1.1.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </link>

    <link href="css/misestilos.css" rel="stylesheet" media="screen">
    </link>

    <!-- librerías SwetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <header>
        <div class="container">
            <br>

            <img width="100%" src="img/banner-f.png">

            <h3>
                Diagnostico de Caracterizacion SocieEconomica
            </h3>
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
                    MotoSoft-

                    <strong>SuperAdmin</strong>
                </a>

                <ul class="navbar-nav  nav-tabs mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="sadmin.html">
                            Nuevo

                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="consulta.html">Consulta</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="reporte.html">Reporte</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="crearadmin.html">Crear Administrador</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="index.html" role="button">Cerrar Sesion</a>
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

<body>
    <div class="container">
        <br>

        <form class="form-horizontal" method="POST" name="frmajax">
            <fieldset>
                <legend>Crear Administrador</legend>
                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-2" for="cc">Cedula :</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="cc" name="cc" placeholder="Cedula" value=""
                                required="required" pattern="[^'\x22]+" title="campo con caracter no valido"></input>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="control-label col-md-2" for="usuario">Usuario :</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"
                                value="" required="required" pattern="[^'\x22]+"
                                title="campo con caracter no valido"></input>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="control-label col-md-2" for="perfil">Perfil :</label>

                        <div class="col-md-6">
                            <select class="form-control" id="perfil" name="perfil">
                                <option value="3">Encuestador</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="control-label col-md-2" for="contrasena">Contraseña :</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" id="contrasena" name="contrasena"
                                placeholder="Contraseña" value="" required="required" pattern="[^'\x22]+"
                                title="campo con caracter no valido"></input>
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="col-md-8">
                            <button name="#btnregistrar" id="#btnregistrar"
                                class="btn btn-success btn-lg btn-block">Guardar</button>
                        </div>
                    </div>
            </fieldset>
        </form>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#btnregistrar").click(function () {
                    var datos = $("#frmajax").serialize();
                    alert(datos);
                    return false;
                    $.ajax({
                        type: "POST",
                        url: "registraradmin.php",
                        data: datos,
                        success: function () {

                        }
                    });
                });
            });

        </script>
        <!-- 
        <script type="text/javascript" src="./js/regadmin.js"></script> -->

        <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
        <script src="js/bootstrap.min.js"></script>
</body>

</html>