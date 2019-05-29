<?php
    require("conector.php");
    $conn = new ConectorBD();
    $conn->initConexion("mototaxis");
?>
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

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </link>

    <link href="css/misestilos.css" rel="stylesheet" media="screen">
    </link>

    <!-- libreria de swat alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->

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
                        <a class="nav-link active" href="sadmin.html">
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
                        <a class="nav-link" href="crearadmin.html">Crear Administrador</a>
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
    <script type="text/javascript">
        var perfil = localStorage.getItem("perfil");
        if (perfil != 1) {
            console.log('Diferente de 1');
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

        <form class="form-horizontal" action="registrar.php" method="POSTJquery">
            <fieldset>
                <legend>1. Condiciones Sociales</legend>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-2" for="nombre">Nombre:</label>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                value="" required="required"></input>
                        </div>

                        <label class="control-label col-md-3" for="cc">Numero de Identificacion :</label>

                        <div class="col-md-3">
                            <input type="number" class="form-control" id="cc" name="cc" placeholder="CC"
                                required="required"></input>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-2" for="celular">Celular:</label>

                        <div class="col-md-4">
                            <input type="number" class="form-control" id="celular" name="celular"
                                placeholder="Celular"></input>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label class="control-label col-md-2" for="genero">Genero:</label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="genero" id="genero" value="1" checked="checked"></input>

                                Masculino
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="genero" id="genero" value="2"></input>

                                Femenino
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="edad">Edad :</label>

                    <div class="col-md-2">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad"></input>
                    </div>

                    <label class="control-label col-md-2" for="estadocivil">Estado Civil :</label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" id="estadocivil" name="estadocivil" value="1"
                                    checked="checked"></input>

                                Casado
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" id="estadocivil" name="estadocivil" value="2"></input>

                                Union
                                Libre
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" id="estadocivil" name="estadocivil" value="3"></input>

                                Separado
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" id="estadocivil" name="estadocivil" value="4"></input>

                                Soltero
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" id="estadocivil" name="estadocivil" value="5"></input>

                                Viudo
                            </label>
                        </div>
                    </div>

                    <!-- select llenado con  la tabla tbl_municipios -->
                    <label class="control-label col-md-2" for="lugarnac">Lugar de nacimiento :</label>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="lugarnac">
                                <?php
                                        $consultamunicipios = "SELECT * FROM municipios";
                                        echo $consultamunicipios;
                                        $resultado= $conn->ejecutarQuery($consultamunicipios);
                            
                                        while($row=mysqli_fetch_array($resultado))
                                             {?>
                                <option value="<?php echo $row["id_municipio"] ?> ">
                                    <?php echo $row["nomb_municipio"]      ?>
                                </option>
                                <?php } ?>
                            </select>

                        </div>
                    </div>

                    <label class="control-label col-md-2" for="religion">Orientacion Religiosa :</label>

                    <div class="col-md-4">
                        <div class="form-group">
                            <!-- select llenado con la tabla tbl_Religion campo id_eligion -->

                            <select class="form-control" id="religion">
                                <?php
                                $consultareligiones = "SELECT * FROM religiones";
                                echo $consultareligiones;
                                $resultadoreligiones= $conn->ejecutarQuery($consultareligiones);
                                while($row=mysqli_fetch_array($resultadoreligiones))
                                {?>
                                <option value="<?php echo $row["id_religion"] ?> ">
                                    <?php echo $row["nomb_religion"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- select llenado con la tabla tbl_barrios -->

                    <label class="control-label col-md-2" for="barrio">Barrio :</label>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="barrio">
                                <?php
                                    $consultabarrios = "SELECT * FROM barrios";
                                    echo $consultabarrios;
                                    $resultadobarrios= $conn->ejecutarQuery($consultabarrios);
                                    while($row=mysqli_fetch_array($resultadobarrios))
                                    {?>
                                <option value="<?php echo $row["id_barrio"] ?> ">
                                    <?php echo $row["nomb_barrio"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="estrato">Estrato :</label>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="estrato">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>

                    <!-- select llenado con la campo personashogar -->

                    <label class="control-label col-md-3" for="personashogar">
                        Cuantas personas conforman su nucleo
                        familiar :
                    </label>

                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personashogar" name="personashogar">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-3" for="personascargo">Personas a Cargo :</label>

                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personascargo" name="personascargo" value="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-3" for="personastrabajan">
                        Personas en su hogar que trabajan
                        :
                    </label>

                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personastrabajan" name="personastrabajan" value="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="regimenseguridadsocial">
                        Regimen de seguridad Social
                        :
                    </label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="regimenseguridadsocial" name="regimenseguridadsocial">
                                <option value="1">Contributivo</option>
                                <option value="2">Subsidiado</option>
                                <option value="3">Ninguno</option>
                            </select>
                        </div>
                    </div>

                    <!-- select llenado con la tala tbl_Eps campo id_Eps -->

                    <label class="control-label col-md-4" for="eps">Eps a la que esta afiliado :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="eps">
                                <?php
                                $consultaeps = "SELECT * FROM eps";
                                echo $consultaeps;
                                $resultadoeps= $conn->ejecutarQuery($consultaeps);
                                while($row=mysqli_fetch_array($resultadoeps))
                                {?>
                                <option value="<?php echo $row["id_eps"] ?> ">
                                    <?php echo $row["nomb_eps"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="pension">Cotiza Pension:</label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="cotizapension" id="cotizapension" value="1"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="cotizapension" id="cotizapension" value="2"></input>

                                No
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="tiempopension">Años de Pension :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoension">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>

                    <!-- tabla tbl_Fondopennsiones campo id_fondopensiones -->

                    <label class="control-label col-md-2" for="fpension">Fondo de Pensiones :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="fpension">
                                <?php
                                    $consultapensiones = "SELECT * FROM fondopensiones";
                                    echo $consultapensiones;
                                    $resultadopensiones= $conn->ejecutarQuery($consultapensiones);
                                    while($row=mysqli_fetch_array($resultadopensiones))
                                     {?>
                                <option value="<?php echo $row["id_fondo_pension"] ?> ">
                                    <?php echo $row["nomb_fondo_pension"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- tabla tbl_Niveleducativo campo id_niveleducativo -->

                    <label class="control-label col-md-2" for="id_">Nivel Eduvativo :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="fpension">
                                <?php
                                 $consultaniveles = "SELECT * FROM niveleseducativos";
                                 echo $consultaniveles;
                                 $resultadoniveles= $conn->ejecutarQuery($consultaniveles);
                                 while($row=mysqli_fetch_array($resultadoniveles))
                                 {?>
                                <option value="<?php echo $row["id_nivel_educativo"] ?> ">
                                    <?php echo $row["nomb_nivel_educativo"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="tiempoterminado">Tiempo terminado :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoterminado">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>
                    </div>

                    <!-- tabla tbl_Tituloobtenido campo id_titulo--buscar carreras unicartagena curn sinu -->

                    <label class="control-label col-md-2" for="idtitulo">Titulo Obtenido :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="idtitulo">
                                <?php
                                $consultatitulos = "SELECT * FROM titulosobtenidos";
                                echo $consultatitulos;
                                $resultadotitulos= $conn->ejecutarQuery($consultatitulos);
                                while($row=mysqli_fetch_array($resultadotitulos))
                                {?>
                                <option value="<?php echo $row["id_titulo"] ?> ">
                                    <?php echo $row["nomb_titulo"] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="ocupacion">Ocupacion :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="ocupacion">
                                <option value="mototaxista">Mototaxista</option>

                                <!-- tabla tbl_Tituloobtenido campo id_titulo--buscar carreras unicartagena curn sinu -->

                                <option value="1">Empleado</option>

                                <option value="2">Desempleado</option>

                                <option value="3">Independiente</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="tiempoexperincia">Años de Experiencia :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoexperincia">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>

                                <option value="6">6</option>

                                <option value="7">7</option>

                                <option value="8">8</option>

                                <option value="9">9</option>

                                <option value="10">10</option>

                                <option value="11">11</option>

                                <option value="12">12</option>

                                <option value="13">13</option>

                                <option value="14">14</option>

                                <option value="15">15</option>

                                <option value="16">16</option>

                                <option value="17">17</option>

                                <option value="18">18</option>

                                <option value="19">19</option>

                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="vinculacion">Tipo Vinculacion:</label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="vinculacion" id="vinculacion" value="1"
                                    checked="checked"></input>

                                Indefenido
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="vinculacion" id="vinculacion" value="2"></input>

                                Termino
                                fijo
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="vinculacion" id="vinculacion" value="3"></input>

                                Obra labor
                            </label>
                        </div>
                    </div>

                    <!-- tabla tbl_Curso campo id_curso -->

                    <label class="control-label col-md-4" for="curso">
                        Que Cursos o capacitaciones ha recibido:
                    </label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="curso"
                            placeholder="manipulacion de alimentos..."></input>
                    </div>

                    <!-- tabla tbl_Entidades campo id_entidad -->

                    <label class="control-label col-md-4" for="entidad">Que Entidad lo ha capacitado:</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="entidad" placeholder="sena"></input>
                    </div>

                    <!-- tabla tbl_Curso campo idcursorecibir -->

                    <label class="control-label col-md-4" for="idcursorecibir">
                        Que Cursos o capacitaciones le gustaria
                        recibir:
                    </label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="idcursorecibir"
                            placeholder="Internet, Office"></input>
                    </div>

                    <!-- tabla tbl_Entidades campo id_entidadcapacite -->

                    <label class="control-label col-md-4" for="id_entidadcapacite">
                        Que Cursos o capacitaciones ha
                        recibido:
                    </label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="id_entidadcapacite"
                            placeholder="cursos sena u otros"></input>
                    </div>

                    <label class="control-label col-md-2" for="tipovivienda">Tipo De Vivienda:</label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="tipovivienda" id="tipovivienda" value="1"
                                    checked="checked"></input>

                                Propia
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="tipovivienda" id="tipovivienda" value="2"></input>

                                Familiar
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="tipovivienda" id="tipovivienda" value="3"></input>

                                Arrendada
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="tipovivienda" id="tipovivienda" value="4"></input>

                                Otro
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="acabados">Tipo De Acabados De Vivienda:</label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="acabados" id="acabados" value="1" checked="checked"></input>

                                Acabada
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="acabados" id="acabados" value="2"></input>

                                Obra Gris
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="acabados" id="acabados" value="3"></input>

                                Obra Negra
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="acabados" id="acabados" value="4"></input>

                                Otro
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="financiacionvivienda">
                        Financiacion De La
                        Vivienda:
                    </label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="financiacionvivienda" id="financiacionvivienda" value="1"
                                    checked="checked"></input>

                                Prestamo Bancario
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="financiacionvivienda" id="financiacionvivienda"
                                    value="2"></input>

                                Subsidio Del Estado
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="financiacionvivienda" id="financiacionvivienda"
                                    value="3"></input>

                                Recurso Propios
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="financiacionvivienda" id="financiacionvivienda"
                                    value="4"></input>

                                Otro
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="habitacionesvivienda">
                        Numero de habitaciones De La
                        Vivienda :
                    </label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="habitacionesvivienda">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>

                                <option value="6">6</option>

                                <option value="7">7</option>

                                <option value="8">8</option>

                                <option value="9">9</option>

                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="servicospublicos">Servicios Publicos:</label>

                    <div class="col-md-4">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos" value="1"
                                    checked="checked"></input>

                                Agua
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos"
                                    value="fa-rotate-270"></input>

                                Alcantarillado
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos" value="3"></input>

                                Energia Electrica
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos" value="4"></input>

                                Tv
                                Cable
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos" value="5"></input>

                                Internet
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="servicospublicos" id="servicospublicos" value="6"></input>

                                Telefono
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="actprincipalspub">
                        Su actividad principal ha sido
                        Mototaxis de servicio publico
                    </label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="actprincipalspub" id="actprincipalspub" value="1"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="actprincipalspub" id="actprincipalspub" value="2"></input>

                                No
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="actprincipalspar">De servicio particular:</label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="actprincipalspar" id="actprincipalspar" value="1"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="actprincipalspar" id="actprincipalspar" value="2"></input>

                                No
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="tiempoexpspub">
                        Tiempo experiencia servicio publico
                        :
                    </label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoexpspub">
                                <option value="1">1 Año</option>

                                <option value="2">2 Años</option>

                                <option value="3">3 Años</option>

                                <option value="4">4 Años</option>

                                <option value="5">5 Años</option>

                                <option value="6">6 Años</option>

                                <option value="7">7 Años</option>

                                <option value="8">8 Años</option>

                                <option value="9">9 Años</option>

                                <option value="10">10 Años</option>

                                <option value="11">11 Años</option>

                                <option value="12">12 Años</option>

                                <option value="13">13 Años</option>

                                <option value="14">14 Años</option>

                                <option value="15">15 Años</option>

                                <option value="16">16 Años</option>

                                <option value="17">17 Años</option>

                                <option value="18">18 Años</option>

                                <option value="19">19 Años</option>

                                <option value="20">20 Años</option>

                                <option value="21">21 Años</option>

                                <option value="22">22 Años</option>

                                <option value="23">23 Años</option>

                                <option value="24">24 Años</option>

                                <option value="25">25 Años</option>

                                <option value="26">26 Años</option>

                                <option value="27">27 Años</option>

                                <option value="28">28 Años</option>

                                <option value="29">29 Años</option>

                                <option value="30">30 Años</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="tiempoexpspar">
                        Tiempo experiencia servicio particular
                        :
                    </label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoexpspar">
                                <option value="1">1 Año</option>

                                <option value="2">2 Años</option>

                                <option value="3">3 Años</option>

                                <option value="4">4 Años</option>

                                <option value="5">5 Años</option>

                                <option value="6">6 Años</option>

                                <option value="7">7 Años</option>

                                <option value="8">8 Años</option>

                                <option value="9">9 Años</option>

                                <option value="10">10 Años</option>

                                <option value="11">11 Años</option>

                                <option value="12">12 Años</option>

                                <option value="13">13 Años</option>

                                <option value="14">14 Años</option>

                                <option value="15">15 Años</option>

                                <option value="16">16 Años</option>

                                <option value="17">17 Años</option>

                                <option value="18">18 Años</option>

                                <option value="19">19 Años</option>

                                <option value="20">20 Años</option>

                                <option value="21">21 Años</option>

                                <option value="22">22 Años</option>

                                <option value="23">23 Años</option>

                                <option value="24">24 Años</option>

                                <option value="25">25 Años</option>

                                <option value="26">26 Años</option>

                                <option value="27">27 Años</option>

                                <option value="28">28 Años</option>

                                <option value="29">29 Años</option>

                                <option value="30">30 Años</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="actividadcomplementaria">
                        Su actividad complementaria ha
                        sido como mototaxis:
                    </label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="actividadcomplementaria" id="actividadcomplementaria"
                                    value="1" checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="actividadcomplementaria" id="actividadcomplementaria"
                                    value="2"></input>

                                No
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="tiempoexpcomplem">Tiempo experiencia:</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="tiempoexpcomplem">
                                <option value="1">1 Año</option>

                                <option value="2">2 Años</option>

                                <option value="3">3 Años</option>

                                <option value="4">4 Años</option>

                                <option value="5">5 Años</option>

                                <option value="6">6 Años</option>

                                <option value="7">7 Años</option>

                                <option value="8">8 Años</option>

                                <option value="9">9 Años</option>

                                <option value="10">10 Años</option>

                                <option value="11">11 Años</option>

                                <option value="12">12 Años</option>

                                <option value="13">13 Años</option>

                                <option value="14">14 Años</option>

                                <option value="15">15 Años</option>

                                <option value="16">16 Años</option>

                                <option value="17">17 Años</option>

                                <option value="18">18 Años</option>

                                <option value="19">19 Años</option>

                                <option value="20">20 Años</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-6" for="perteneceorganizacion">
                        Como conductor pertenece a algun
                        tipo de organizacion:
                    </label>

                    <div class="col-md-6">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="perteneceorganizacion" id="perteneceorganizacion" value="1"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="perteneceorganizacion" id="perteneceorganizacion"
                                    value="2"></input>

                                No
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="text" name="perteneceorganizacion" id="perteneceorganizacion"
                                    placeholder="Cual organizacion"></input>
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="caracterizado">lo han caracterizado:</label>

                    <div class="col-md-2">
                        <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                        <div class="radio">
                            <label>
                                <input type="radio" name="caracterizado" id="caracterizado" value="1"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="caracterizado" id="caracterizado" value="2"></input>

                                No
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-3" for="entidadcaracterizo">Que entidad lo caracterizo:</label>

                    <div class="col-md-3">
                        <div class="text">
                            <label>
                                <input type="text" name="entidadcaracterizo" id="entidadcaracterizo"></input>
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-6" for="evalresponsabilidad">
                        Evalue de 1 a 5 sus habilidades
                        (siendo 1 el valor mas bajo y 5 el mas alto)
                    </label>

                    <div class="col-md-6">
                        <label class="control-label">
                            Responsabilidad

                            <select class="form-control" for="evalresponsabilidad">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>
                            </select>
                        </label>

                        <label class="control-label" for="evalautoestima">
                            Autoestima

                            <select class="form-control">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>
                            </select>
                        </label>

                        <label class="control-label" for="evalsociabilidad">
                            Sociabilidad

                            <select class="form-control">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>
                            </select>
                        </label>

                        <label class="control-label" for="evalintegridad">
                            Integridad

                            <select class="form-control">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>
                            </select>
                        </label>

                        <label class="control-label" for="evalamabilidad">
                            Amabilidad

                            <select class="form-control">
                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>
                            </select>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>2. Nucleo Familiar</legend>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-3" for="ingresosfamiliar">
                            Ingresos mensuales generados por el
                            grupo familiar:
                        </label>

                        <div class="col-md-3">
                            <select class="form-control" id="imensuales">
                                <option value="1">0 - 414.058 (0.5 Smlv)</option>

                                <option value="2">414.058 - 828.116 (1 Smlv)</option>

                                <option value="3">828.116 - 1.242.174(1.5 Smlv)</option>

                                <option value="4">
                                    1.242.174 - 1.656.232(2 Smlv))
                                </option>
                            </select>
                        </div>

                        <label class="control-label col-md-3" for="otrosingresosfamiliar">
                            Otros Ingresos que recibe el
                            nucleo familiar:
                        </label>

                        <div class="col-md-3">
                            <select class="form-control" id="imensuales">
                                <option value="1">0 - 414.058 (0.5 Smlv)</option>

                                <option value="2">414.058 - 828.116 (1 Smlv)</option>

                                <option value="3">828.116 - 1.242.174(1.5 Smlv)</option>

                                <option value="3">
                                    1.242.174 - 1.656.232(2 Smlv))
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-3" for="gastosfamilia">
                            Gastos mensuales del grupo
                            familiar:
                        </label>

                        <div class="col-md-3">
                            <select class="form-control" id="gmensuales">
                                <option value="1">0 - 414.058 (0.5 Smlv)</option>

                                <option value="2">414.058 - 828.116 (1 Smlv)</option>

                                <option value="3">828.116 - 1.242.174(1.5 Smlv)</option>

                                <option value="4">
                                    1.242.174 - 1.656.232(2 Smlv))
                                </option>
                            </select>
                        </div>

                        <label class="control-label col-md-3" for="tahorro">
                            El grupo familiar esta haciendo algun tipo
                            de ahorro:
                        </label>

                        <div class="col-md-3">
                            <!-- <input type="text" class="form-control" id="nombre" placeholder="Nombre"> -->

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tahorro" id="torganizacion" value="1"
                                        checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tahorro" id="torganizacion" value="2"></input>

                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    3. Condiciones Economicas-Productivas
                </legend>

                <p>Tipo de actividad laboral:</p>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-4" for="licenciaconduccion">
                            Cuenta con licencia de
                            conduccion:
                        </label>

                        <div class="col-md-2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="licenciaconduccion" id="licenciaconduccion" value="1"
                                        checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="licenciaconduccion" id="licenciaconduccion"
                                        value="2"></input>

                                    No
                                </label>
                            </div>
                        </div>

                        <label class="control-label col-md-4" for="tarjetadepropiedad">
                            Cuenta usted con tarjeta
                            profesional del vehiculo:
                        </label>

                        <div class="col-md-2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tarjetadepropiedad" id="tarjetadepropiedad" value="1"
                                        checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tarjetadepropiedad" id="tarjetadepropiedad"
                                        value="2"></input>

                                    No
                                </label>
                            </div>
                        </div>

                        <label class="control-label col-md-4" for="soat">
                            Cuenta usted con con el seguro obligatorio de
                            automovil SOAT:
                        </label>

                        <div class="col-md-2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="soat" id="soat" value="1" checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="soat" id="soat" value="2"></input>

                                    No
                                </label>
                            </div>
                        </div>

                        <label class="control-label col-md-4" for="tecnicomecanica">
                            Su vehiculo cuenta con revision
                            tecnomecanica :
                        </label>

                        <div class="col-md-2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tecnicomecanica" id="tecnicomecanica" value="si"
                                        checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="tecnicomecanica" id="tecnicomecanica" value="no"></input>

                                    No
                                </label>
                            </div>
                        </div>

                        <label class="control-label col-md-4" for="matriculado">
                            Su vehiculo se encuentra matriculado en
                            la entidad pertinente :
                        </label>

                        <div class="col-md-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="matriculado" id="matriculado" value="si"
                                        checked="checked"></input>

                                    Si
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="matriculado" id="matriculado" value="no"></input>

                                    No
                                </label>
                            </div>
                        </div>

                        <label class="control-label col-md-4" for="cargo">Cargos Administrativos:</label>

                        <div class="col-md-8">
                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo"
                                    value="tecnico"></input>

                                Tecnico
                            </label>

                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo"
                                    value="tecnologo"></input>

                                Tecnologo
                            </label>

                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo"
                                    value="profesional"></input>

                                Profesional
                            </label>

                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo"
                                    value="auxiliar"></input>

                                Auxiliar
                            </label>

                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo"
                                    value="secretaria"></input>

                                Secretaria
                            </label>

                            <label>
                                <input type="radio" class="form-control" name="cargo" id="cargo" value="otro"></input>

                                Otro
                            </label>

                            <label>
                                <input type="text" name="otrocargo" id="otrocargo"></input>
                            </label>
                        </div>

                        <h6 class="col-md-12">Tipo actividad productiva</h6>

                        <label class="control-label col-md-2" for="expServiciomecanica">
                            Servicio mecanica
                            automotriz:
                        </label>

                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="id"
                                    expServiciomecanicaExpServiciomontallantas="expServiciomecanicaExpServiciomontallantas">
                                    <option value="1">
                                        1
                                        Año
                                    </option>

                                    <option value="2">2 Años</option>

                                    <option value="3">3 Años</option>

                                    <option value="4">4 Años</option>

                                    <option value="5">5 Años</option>

                                    <option value="6">6 Años</option>

                                    <option value="7">7 Años</option>

                                    <option value="8">8 Años</option>

                                    <option value="9">9 Años</option>

                                    <option value="10">10 Años</option>

                                    <option value="11">11 Años</option>

                                    <option value="12">12 Años</option>

                                    <option value="13">13 Años</option>

                                    <option value="14">14 Años</option>

                                    <option value="15">15 Años</option>

                                    <option value="16">16 Años</option>

                                    <option value="17">17 Años</option>

                                    <option value="18">18 Años</option>

                                    <option value="19">19 Años</option>

                                    <option value="20">20 Años</option>
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="ExpServiciomontallantas">
                            Servicio de
                            montallantas:
                        </label>

                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="ExpServiciomontallantas">
                                    <option value="1">1 Año</option>

                                    <option value="2">2 Años</option>

                                    <option value="3">3 Años</option>

                                    <option value="4">4 Años</option>

                                    <option value="5">5 Años</option>

                                    <option value="6">6 Años</option>

                                    <option value="7">7 Años</option>

                                    <option value="8">8 Años</option>

                                    <option value="9">9 Años</option>

                                    <option value="10">10 Años</option>

                                    <option value="11">11 Años</option>

                                    <option value="12">12 Años</option>

                                    <option value="13">13 Años</option>

                                    <option value="14">14 Años</option>

                                    <option value="15">15 Años</option>

                                    <option value="16">16 Años</option>

                                    <option value="17">17 Años</option>

                                    <option value="18">18 Años</option>

                                    <option value="19">19 Años</option>

                                    <option value="20">20 Años</option>
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="ExpLavadorcarro">Lavador de Carro:</label>

                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="ExpLavadorcarro">
                                    <option value="1">1 Año</option>

                                    <option value="2">2 Años</option>

                                    <option value="3">3 Años</option>

                                    <option value="4">4 Años</option>

                                    <option value="5">5 Años</option>

                                    <option value="6">6 Años</option>

                                    <option value="7">7 Años</option>

                                    <option value="8">8 Años</option>

                                    <option value="9">9 Años</option>

                                    <option value="10">10 Años</option>

                                    <option value="11">11 Años</option>

                                    <option value="12">12 Años</option>

                                    <option value="13">13 Años</option>

                                    <option value="14">14 Años</option>

                                    <option value="15">15 Años</option>

                                    <option value="16">16 Años</option>

                                    <option value="17">17 Años</option>

                                    <option value="18">18 Años</option>

                                    <option value="19">19 Años</option>

                                    <option value="20">20 Años</option>
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="ExpVendedordulcevdulce">Vendedor de dulce:</label>

                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="ExpVendedordulcevdulce">
                                    <option value="1">1 Año</option>

                                    <option value="2">2 Años</option>

                                    <option value="3">3 Años</option>

                                    <option value="4">4 Años</option>

                                    <option value="5">5 Años</option>

                                    <option value="6">6 Años</option>

                                    <option value="7">7 Años</option>

                                    <option value="8">8 Años</option>

                                    <option value="9">9 Años</option>

                                    <option value="10">10 Años</option>

                                    <option value="11">11 Años</option>

                                    <option value="12">12 Años</option>

                                    <option value="13">13 Años</option>

                                    <option value="14">14 Años</option>

                                    <option value="15">15 Años</option>

                                    <option value="16">16 Años</option>

                                    <option value="17">17 Años</option>

                                    <option value="18">18 Años</option>

                                    <option value="19">19 Años</option>

                                    <option value="20">20 Años</option>
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="ExpRecreacionista">Recreacionista:</label>

                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="ExpRecreacionista">
                                    <option value="1">1 Año</option>

                                    <option value="2">2 Años</option>

                                    <option value="3">3 Años</option>

                                    <option value="4">4 Años</option>

                                    <option value="5">5 Años</option>

                                    <option value="6">6 Años</option>

                                    <option value="7">7 Años</option>

                                    <option value="8">8 Años</option>

                                    <option value="9">9 Años</option>

                                    <option value="10">10 Años</option>

                                    <option value="11">11 Años</option>

                                    <option value="12">12 Años</option>

                                    <option value="13">13 Años</option>

                                    <option value="14">14 Años</option>

                                    <option value="15">15 Años</option>

                                    <option value="16">16 Años</option>

                                    <option value="17">17 Años</option>

                                    <option value="18">18 Años</option>

                                    <option value="19">19 Años</option>

                                    <option value="20">20 Años</option>
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="ExpSuministroAlim">Suministro de alimentos:</label>

                        <div class="col-md-2">
                            <select class="form-control" id="ExpSuministroAlim">
                                ExpSuministroAlim

                                <option value="1">1 Año</option>

                                <option value="2">2 Años</option>

                                <option value="3">3 Años</option>

                                <option value="4">4 Años</option>

                                <option value="5">5 Años</option>

                                <option value="6">6 Años</option>

                                <option value="7">7 Años</option>

                                <option value="8">8 Años</option>

                                <option value="9">9 Años</option>

                                <option value="10">10 Años</option>

                                <option value="11">11 Años</option>

                                <option value="12">12 Años</option>

                                <option value="13">13 Años</option>

                                <option value="14">14 Años</option>

                                <option value="15">15 Años</option>

                                <option value="16">16 Años</option>

                                <option value="17">17 Años</option>

                                <option value="18">18 Años</option>

                                <option value="19">19 Años</option>

                                <option value="20">20 Años</option>
                            </select>
                        </div>

                        <label class="control-label col-md-3" for="Ingresopromedio">
                            Cual es su ingreso promedio del
                            mes:
                        </label>

                        <div class="col-md-3">
                            <select class="form-control" id="Ingresopromedio">
                                <option value="1">0 - 414.058 (0.5 Smlv)</option>

                                <option value="2">414.058 - 828.116 (1 Smlv)</option>

                                <option value="3">828.116 - 1.242.174(1.5 Smlv)</option>

                                <option value="3">
                                    1.242.174 - 1.656.232(2 Smlv))
                                </option>
                            </select>
                        </div>

                        <label class="control-label col-md-3" for="gastopromedio">
                            Cual es su gasto promedio del
                            mes:
                        </label>

                        <div class="col-md-3">
                            <select class="form-control" id="gastopromedio">
                                <option value="1">0 - 414.058 (0.5 Smlv)</option>

                                <option value="2">414.058 - 828.116 (1 Smlv)</option>

                                <option value="3">828.116 - 1.242.174(1.5 Smlv)</option>

                                <option value="3">
                                    1.242.174 - 1.656.232(2 Smlv))
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>

            <legend>4. Observaciones</legend>

            <div class="form-group">
                <div class="input-group">
                    <label class="control-label col-md-6" for="dependenciaeconomica">
                        Cuantas personas depende
                        economicamnete de su actividad laboral :
                    </label>

                    <div class="col-md-6">
                        <div class="text">
                            <!-- <input type="text" class="form-control" name="dependenciaeconomica" id="dependenciaeconomica"> -->

                            <textarea class="form-control" name="dependenciaeconomica"
                                id="dependenciaeconomica">Enter text here...</textarea>
                        </div>
                    </div>

                    <label class="control-label col-md-6" for="tiempomototaxismo">
                        Cuanto tiempo lleva ejerciendo el
                        mototaxismo:
                    </label>

                    <div class="col-md-6">
                        <div class="text">
                            <!-- <input type="text" class="form-control" name="tiempomototaxismo" id="tiempomototaxismo"> -->

                            <textarea class="form-control" name="tiempomototaxismo"
                                id="tiempomototaxismo">Enter text here...</textarea>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="actividadrentable">
                        Considera usted que el mototaxismo es una actividad rentable para la economia de su hogar:
                        (Explique)
                    </label>

                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="actividadrentable" id="actividadrentable" value="si"
                                    checked="checked"></input>

                                Si
                            </label>
                        </div>

                        <div class="radio">
                            <label></label>

                            <input type="radio" name="actividadrentable" id="actividadrentable" value="no"></input>

                            No
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="text">
                            <!-- <input type="textarea" class="form-control" name="tiempomototaxismo" id="tiempomototaxismo"> -->

                            <textarea class="form-control" name="tiempomototaxismo"
                                id="tiempomototaxismo">Enter text here...</textarea>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="actividadrentable">Fecha de Diligenciamiento</label>

                    <input class="form-control col-md-4" type="date" name="fechadiligenciamiento"></input>
                </div>
            </div>
        </form>
    </div>

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>