<?php

require ("conexion.php");
require("conector.php");
$conn = new ConectorBD();
$conn->initConexion("mototaxis");
// $ccform=$_POST['cc']; 
$consultacc="SELECT cedula, nombre, celular, genero,edad, estado_civil,nomb_municipio, nomb_religion, nomb_barrio,estrato,personas_hogar,personas_cargo,personas_trabajan, seguridad_social,nomb_eps,cotiza_pension,tiempo_pension,nomb_fondo_pension,nomb_nivel_educativo,tiempo_terminado,nomb_titulo,ocupacion,tiempo_experiencia,vinculacion,c1.nomb_curso as curso1,e1.nomb_entidad as entidad1,c2.nomb_curso as curso2,e2.nomb_entidad as entidad2,nomb_tipo_vivienda, nomb_tipo_acabado,nomb_financiacion_vivienda, habitaciones_vivienda, servicios_publicos_1,servicios_publicos_2,servicios_publicos_3,servicios_publicos_4,servicios_publicos_5,servicios_publicos_6,act_principal_spub,act_principal_spart,tiempo_exp_spub,tiempo_exp_spart,actividad_complementaria,tiempo_exp_complem, pertenece_organizacion,cual_organizacion,caracterizado, entidad_caracterizo, eval_responsabilidad,eval_autoestima,eval_socialibidad,eval_integridad,eval_amabilidad,ingresos_familiar,otros_ingresos_familiar,gastos_familiar,ahorro_familiar,licencia_conduccion,tarjeta_propiedad,soat,tecnico_mecanica,matriculado,nomb_cargo,exp_servicio_mecanica,exp_servicio_montallantas,exp_lavador_carro,exp_vendedor_dulces,exp_recreacionista,exp_suministro_alim,ingreso_promedio,gasto_promedio,dependencia_economica,tiempo_mototaxismo,actividad_rentable,actividad_rentable_razones,fecha_diligenciamiento,encuestado,encuestador FROM PERSONAS 
LEFT JOIN municipios on personas.id_municipio2=municipios.id_municipio
LEFT JOIN religiones on personas.id_religion=religiones.id_religion
LEFT JOIN barrios on personas.id_barrio=barrios.id_barrio 
LEFT JOIN eps on personas.id_eps=eps.id_eps
LEFT JOIN fondopensiones on personas.id_fondo_pension=fondopensiones.id_fondo_pension
LEFT JOIN niveleseducativos on personas.id_nivel_educativo=niveleseducativos.id_nivel_educativo
LEFT JOIN titulosobtenidos on personas.id_titulo=titulosobtenidos.id_titulo
LEFT JOIN cursos as c1 on personas.id_curso=c1.id_curso
LEFT JOIN entidades as e1 on personas.id_entidad=e1.id_entidad
LEFT JOIN cursos as c2 on personas.id_curso_recibir=c2.id_curso
LEFT JOIN entidades as e2 on personas.id_entidad_capacite=e2.id_entidad
LEFT JOIN tipoviviendas on personas.id_tipo_vivienda=tipoviviendas.id_tipo_vivienda
LEFT JOIN tipoacabados on personas.id_tipo_acabado=tipoacabados.id_tipo_acabado
LEFT JOIN financiacionvivienda as f2 on personas.id_financiacion_vivienda=f2.id_financiacion_vivienda
LEFT JOIN cargos on personas.id_cargo=cargos.id_cargo
where cedula=73211652";
$resultadocc=$conn->ejecutarQuery($consultacc);
while($row=mysqli_fetch_array($resultadocc))
    {    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Diagnostico de Caracterizacion SocieEconomica  </title>

    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">  
    <!-- CSS Personal -->
    <link href="css/misestilos.css" rel="stylesheet" media="screen">
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
                    MotoSoft-<strong>SuperAdmin</strong>
                </a>
                <ul class="navbar-nav  nav-tabs mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " href="sadmin.html">
                            Nuevo
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link active" href="consultasadmin.php">Consulta</a>
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
        <form class="form-horizontal"  disabled>
            <fieldset >
                <legend>1. Condiciones Sociales</legend>

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-2" for="nombre">Nombre:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nombre" name="nombre"
                             value="<?php echo $row['nombre']; ?>" disabled>
                        </div>
                        <label class="control-label col-md-3" for="cc">Numero de Identificacion :</label>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="ccc" name="ccc"
                                value="<?php echo $row['cedula']; ?>" disabled>
                        </div>
                    </div>
                </div>   

                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-2" for="celular">Celular:</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="celular" name="celular"
                                value="<?php echo $row['celular']; ?>" disabled>
                        </div>
                    </div>
                </div>
                   <div class="input-group">
                        <label class="control-label col-md-2" for="genero">Genero:</label>

                          <div class="col-md-2">
                            <div class="radio" >
                               <label>
                                 <input type="radio" name="genero" id="genero" checked="checked">
                                 <?php echo $row['genero']; ?>
                                 </input>
                               </label>
                            </div>                      
                         </div>
                            <label class="control-label col-md-2" for="genero">Edad:</label>
                          <div class="col-md-2">                           
                            <input type="number" class="form-control" id="edad" name="edad"
                                value="<?php echo $row['edad']; ?>" disabled>                                           
                         </div>
                             <label class="control-label col-md-2" for="estado_civil">Estado Civil :</label>
                          <div class="col-md-2">                           
                            <input type="text" class="form-control" id="estado_civil" name="estado_civil"
                                value="<?php echo $row['estado_civil']; ?>" disabled>                                           
                         </div>

                        <label class="control-label col-md-2" for="lugarnac">Lugar de nacimiento :</label>
                        <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control"  name="lugarnac" id="lugarnac" disabled>
                                 <option value="" ><?php echo $row['nomb_municipio'];  ?>
                                </option>                                
                            </select>
                        </div>
                       </div>
                         <label class="control-label col-md-2" for="lugarnac">Orientacion Religiosa :</label>
                        <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control"  name="lugarnac" id="lugarnac" disabled >
                                 <option value="" ><?php echo $row['nomb_religion'];  ?>
                                </option>                                
                            </select>
                        </div>
                    </div>
                    
                    <label class="control-label col-md-2" for="barrio">Barrio :</label>

                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name='barrio' id="barrio" disabled>                            
                                <option value=""> <?php echo $row["nomb_barrio"] ?>  </option>                             
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="estrato">Estrato :</label>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="estrato" id="estrato" disabled >
                                <option value=""> <?php echo $row["estrato"] ?></option>                                
                            </select>
                        </div>
                    </div>

                    
                    <label class="control-label col-md-3" for="personashogar">
                        Cuantas personas conforman su nucleo
                        familiar :
                    </label>

                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personashogar" name="personashogar" disabled >
                                 <option value=""> <?php echo $row["personas_hogar"] ?></option>                                 
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-3" for="personascargo">Personas a Cargo :</label>
                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personascargo" name="personascargo" value="" disabled>
                              <option value=""> <?php echo $row["personas_cargo"] ?></option>                             
                            </select>
                        </div>
                    </div>

                    
                    <label class="control-label col-md-3" for="personastrabajan">
                        Personas en su hogar que trabajan :
                    </label>
                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" id="personastrabajan" name="personastrabajan" disabled >
                                     <option value=""> <?php echo $row["personas_trabajan"] ?></option>   
                            </select>                               
                        </div>
                    </div>

                      <label class="control-label col-md-4" for="regimenseguridadsocial">
                        Regimen de seguridad Social :
                    </label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="regimenseguridadsocial" name="regimenseguridadsocial" disabled>
                               <option value=""> <?php echo $row["seguridad_social"] ?></option>                             
                            </select>
                        </div>
                    </div>
                    
                       <label class="control-label col-md-4" for="eps">Eps a la que esta afiliado :</label>

                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name='eps' id="eps" disabled>
                                     <option value=""> <?php echo $row["nomb_eps"] ?></option>                      
                            </select>
                        </div>
                    </div>

                     <label class="control-label col-md-2" for="cotizapension">Cotiza Pension:</label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="cotizapension" id="cotizapension" value=""
                                    checked="checked"><?php echo "   ".$row["cotiza_pension"] ?></input>                            
                            </label>
                        </div>                       
                    </div>
                    <label class="control-label col-md-2" for="tiempopension">Años de Pension :</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name='tiempopension' id="tiempopension" disabled>
                               <option value=""> <?php echo $row["tiempo_pension"] ?></option>                                    
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="fpension">Fondo de Pensiones :</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name='fpension' id="fpension" disabled >
                                <option value=""> <?php echo $row["nomb_fondo_pension"] ?></option>                                                               
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="niveleducativo">Nivel Eduvativo :</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name='niveleducativo' id="niveleducativo" disabled>
                                <option value=""> <?php echo $row["nomb_nivel_educativo"] ?></option>                                
                            </select>
                        </div>
                    </div>

                     <label class="control-label col-md-2" for="tiempoterminado">Tiempo terminado :</label>
                    <div class="col-md-1">
                        <div class="form-group">
                            <select class="form-control" name='tiempoterminado' id="tiempoterminado" disabled>
                                <option value=""> <?php echo $row["tiempo_terminado"] ?></option>                                                            
                            </select>
                        </div>
                    </div>

                     <label class="control-label col-md-2" for="tituloobtenido">Titulo Obtenido :</label>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name='tituloobtenido' id="tituloobtenido" disabled >
                                <option value=""> <?php echo $row["nomb_titulo"] ?></option>                             
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="ocupacion">Ocupacion :</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="ocupacion" id="ocupacion" disabled>
                                <option value=""> <?php echo $row["ocupacion"] ?></option>     
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="tiempoexperincia">Años de Experiencia :</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="tiempoexperiencia" id="tiempoexperiencia" disabled>
                                <option value=""> <?php echo $row["tiempo_experiencia"] ?></option>                                  
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="tipovinculacion">Tipo Vinculacion:</label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipovinculacion" id="tipovinculacion" value="<?php echo $row['vinculacion'] ?>"
                                    checked="checked" >
                                Contrato
                            </label>
                        </div>                        
                    </div>

                    <label class="control-label col-md-4" for="curso">
                             Que Cursos o capacitaciones ha recibido:
                    </label>
                    <div class="col-md-8">
                         <div class="form-group">
                            <select class="form-control" name="curso" id="curso" disabled>
                            <option value="">
                                 <?php echo $row["curso1"] ?>
                            </option>
                            </select>
                        </div>                            
                    </div>
                    
                    <label class="control-label col-md-4" for="entidad">Que Entidad lo ha capacitado:</label>
                    <div class="col-md-8">
                             <select class="form-control" name="entidad" id="entidad" disabled>
                               <option value="">
                                 <?php echo $row["entidad1"] ?>
                            </option>
                            </select>
                    </div>

                      <label class="control-label col-md-4" for="cursoarecibir">
                        Que cursos o capacitaciones le gustaria
                        recibir:
                    </label>

                    <div class="col-md-8">
                       <select class="form-control" name="cursoarecibir" id="cursoarecibir" disabled>
                               <option value="">
                                 <?php echo $row["curso2"] ?>               <!-- corregir consulta misma tabla -->
                               </option>          
                        </select>
                    </div>

                    <label class="control-label col-md-4" for="entidadcapacite">
                        Que entidad le gustaria que lo capacite:
                    </label>
                    <div class="col-md-8">
                       <select class="form-control" name="entidadcapacite" id="entidadcapacite" disabled>
                              <option value="">
                                 <?php echo $row["entidad2"] ?>               <!-- corregir consulta misma tabla -->
                               </option>
                            </select>
                    </div>

                    <label class="control-label col-md-2" for="tipovivienda">Tipo De Vivienda:</label>
                    <div class="col-md-2">
                        <div class="radio">                         
                                <input type="radio" name="tipovivienda" id="tipovivienda" value=""
                                    checked="checked"><?php echo " ".$row['nomb_tipo_vivienda'] ?>
                                </input>               
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="acabados">Tipo De Acabados De Vivienda:</label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="acabados" id="acabados" value="" checked="checked">
                                   <?php echo " ".$row['nomb_tipo_acabado'] ?>
                                </input>                               
                            </label>
                        </div>
                    </div>  

                     <label class="control-label col-md-2" for="financiacionvivienda">
                        Financiacion De La Vivienda:
                    </label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="financiacionvivienda" id="financiacionvivienda" value=""
                                    checked="checked">                                           
                                   <?php echo " ".$row['nomb_financiacion_vivienda'] ?>                                
                                </input>                           
                            </label>
                        </div>
                    </div>

                    <label class="control-label col-md-4" for="habitacionesvivienda">
                        Numero de habitaciones De La
                        Vivienda :
                    </label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="habitacionesvivienda" id="habitacionesvivienda">
                                <option selected="selected" value="">
                                    <?php echo $row["habitaciones_vivienda"] ?>                                      
                                </option>               
                            </select>
                        </div>
                    </div>

                    <label class="control-label col-md-2" for="servicospublicos">Servicios Publicos:</label>

                    <div class="col-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_1" id="sp_1" value="" disabled>
                                <?php echo " ".$row['servicios_publicos_1'] ?> 
                            </label>
                        </div>            
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_2" id="sp_2" value="" disabled>
                                 <?php echo " ".$row['servicios_publicos_2'] ?> 
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_3" id="sp_3" value="" disabled>
                            <?php echo " ".$row['servicios_publicos_3'] ?> 
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_4" id="sp_4" value="" disabled>
                                  <?php echo " ".$row['servicios_publicos_4'] ?> 
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_5" id="sp_5" value="" disabled>
                                   <?php echo " ".$row['servicios_publicos_5'] ?>                                 
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sp_6" id="sp_6" value="" disabled>
                                  <?php echo " ".$row['servicios_publicos_6'] ?> 
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
                                <input type="radio" name="actprincipalspub" id="actprincipalspub" value=""
                                    checked="checked">
                                             <?php echo " ".$row['act_principal_spub'] ?> 
                                </input>                               
                            </label>
                        </div>                     
                    </div>

                    <label class="control-label col-md-2" for="actprincipalspar">De servicio particular:</label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="actprincipalspar" id="actprincipalspar" value="Si"
                                    checked="checked">
                                         <?php echo " ".$row['act_principal_spart'] ?>                                 
                                </input>
                           
                            </label>
                        </div>                   
                    </div>
                    
                    <label class="control-label col-md-4" for="tiempoexpspub">
                        Tiempo experiencia servicio publico :
                    </label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="tiempoexpspub" id="tiempoexpspub" disabled>
                                <option value="">
                                    <?php echo " ".$row['tiempo_exp_spub'] ?>  
                                </option>                                    
                            </select>
                        </div>
                    </div>

                    
                    <label class="control-label col-md-4" for="tiempoexpspar">
                        Tiempo experiencia servicio particular :
                    </label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="tiempoexpspar" id="tiempoexpspar" disabled>
                                 <option value="">
                                   <?php echo " ".$row['tiempo_exp_spart'] ?>  
                                 </option>        
                            </select>
                        </div>
                    </div>

                     <label class="control-label col-md-4" for="actividadcomplementaria">
                        Su actividad complementaria ha
                        sido como mototaxis:
                    </label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="actividadcomplementaria" id="actividadcomplementaria"
                                    value="" checked="checked">
                                        <?php echo " ".$row['actividad_complementaria'] ?>  
                                </input>                              
                            </label>
                        </div>                        
                    </div>

                    
                    <label class="control-label col-md-4" for="tiempoexpcomplem">Tiempo experiencia:</label>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="tiempoexpcomplem" id="tiempoexpcomplem" disabled>
                                <option value="">
                                    <?php echo " ".$row['tiempo_exp_complem'] ?>  
                                </option>                                    
                            </select>
                        </div>
                    </div>

                     <label class="control-label col-md-6" for="perteneceorganizacion">
                        Como conductor pertenece a algun
                        tipo de organizacion:
                    </label>
                    <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio"  name="perteneceorganizacion" id="perteneceorganizacion" value=""
                                    checked="checked">
                                       <?php echo " ".$row['pertenece_organizacion'] ?>                                                            
                            </label>
                        </div>                     
                     </div>
                     <div class="col-md-4">                          
                            <input type="text" class="form-control" name="cualorganizacion" id="cualorganizacion" 
                             value="<?php echo " ".$row['cual_organizacion'] ?>" disabled>                           
                    </div>

                    
                    <label class="control-label col-md-3" for="caracterizado">Lo han caracterizado:</label>
                        <div class="col-md-3">                                              
                                <input type="radio" name="caracterizado" id="caracterizado" value=""
                                    checked="checked">
                                        <?php echo " ".$row['caracterizado'] ?>  
                                </input>                                  
                        </div>
                    <label class="control-label col-md-3 " for="entidadcaracterizo">Que entidad lo caracterizo:</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control " name="entidadcaracterizo" id="entidadcaracterizo" value="<?php echo $row['entidad_caracterizo'] ?>">                                              
                        </div>

                    <label class="control-label col-md-6" for="evalresponsabilidad">
                        Evalue de 1 a 5 sus habilidades
                        (siendo 1 el valor mas bajo y 5 el mas alto)
                    </label>

                    <div class="col-md-6">
                        <label class="control-label" for="evalresponsabilidad">Responsabilidad
                            <select class="form-control" name="evalresponsabilidad" id="evalresponsabilidad" for="evalresponsabilidad" disabled>
                                <option value="">
                                    <?php echo $row['eval_responsabilidad'] ?>
                                </option>                            
                            </select>
                        </label>
                    <label class="control-label" for="evalautoestima">Autoestima
                        <select class="form-control" name="evalautoestima" id="evalautoestima" disabled>
                                <option value="">
                                    <?php echo $row['eval_autoestima'] ?>                                    
                                </option>                              
                        </select>
                    </label>
                    <label class="control-label" for="evalsociabilidad">Sociabilidad
                            <select class="form-control" name="evalsociabilidad" id="evalsociabilidad" disabled>
                                <option value="">
                                    <?php echo $row['eval_socialibidad'] ?>                                   
                                </option>                              
                            </select>
                    </label>
                    <label class="control-label" for="evalintegridad">Integridad
                            <select class="form-control" name="evalintegridad" id="evalintegridad" disabled>
                                <option value="1">
                                    <?php echo $row['eval_integridad'] ?>  
                                </option>                            
                            </select>
                    </label>
                    <label class="control-label" for="evalamabilidad">Amabilidad
                            <select class="form-control" name="evalamabilidad" id="evalamabilidad" disabled>
                                <option value="1">
                                     <?php echo $row['eval_amabilidad'] ?>                                    
                                </option>                        
                            </select>
                    </label>
                    </div>
                </div>
        </fieldset>  
            <!-- Segunda Parte, nucleo familiar -->
            <fieldset>
                <legend>2. Nucleo Familiar</legend>
                <div class="form-group">
                    <div class="input-group">
                        <label class="control-label col-md-3" for="ingresosfamiliar">
                            Ingresos mensuales generados por el
                            grupo familiar:
                        </label>
                        <div class="col-md-3">
                          <input type="number" class="form-control" id="ingresosfamiliar" name="ingresosfamiliar" value="<?php echo $row['ingresos_familiar'] ?>" disabled >             
                        </div>
                        <label class="control-label col-md-3" for="otrosingresosfamiliar">
                            Otros Ingresos que recibe el
                            nucleo familiar:
                        </label>
                        <div class="col-md-3">
                        <input type="number" class="form-control" 
                        id="otrosingresosfamiliar" name="otrosingresosfamiliar" placeholder="250000" value="<?php echo $row['otros_ingresos_familiar'] ?>" disabled>
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
                           <input type="number" class="form-control" 
                                  id="gastosfamilia" name="gastosfamilia" value="<?php echo $row['gastos_familiar'] ?>" disabled>
                        </div>
                        <label class="control-label col-md-3" for="tahorro">
                            El grupo familiar esta haciendo algun tipo
                            de ahorro:
                        </label>
                        <div class="col-md-3">
                            <div class="radio">                              
                                    <input type="radio" name="tahorro" id="tahorro" value="" checked>
                                    <?php echo " ".$row['ahorro_familiar'] ?>
                                    </input>
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
                                    <input type="radio" name="licenciaconduccion" id="licenciaconduccion" value=""
                                        checked="checked">
                                             <?php echo " ".$row['licencia_conduccion'] ?>
                                    </input>                                    
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
                                        checked="checked">
                                            <?php echo " ".$row['tarjeta_propiedad'] ?>
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
                                    <input type="radio" name="soat" id="soat" value="1" checked="checked">
                                    <?php echo " ".$row['soat'] ?>
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
                                    <input type="radio" name="tecnicomecanica" id="tecnicomecanica" value="1"
                                        checked="checked">
                                       <?php echo " ".$row['tecnico_mecanica'] ?>
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
                                    <input type="radio" name="matriculado" id="matriculado" value="1"
                                        checked="checked">
                                       <?php echo " ".$row['matriculado'] ?>
                                </label>
                            </div>                           
                        </div>

                        <label class="control-label col-md-4" for="cargoadtivo">Cargos Administrativos:</label>
                        <div class="col-md-8">
                            <select class="form-control" name="cargoadtivo" id="cargoadtivo" disabled>                           
                                <option value="" >
                                    <?php echo $row["nomb_cargo"] ?>                                
                                </option>                                
                            </select>                           
                        </div>

                        <h5 class="col-md-12">Tipo actividad productiva :</h5>

                        <label class="control-label col-md-2" for="expserviciomecanica">
                            Servicio mecanica
                            automotriz:
                        </label>
                        <div class="col-md-4">
                            <label>
                                <select class="form-control" id="expserviciomecanica"
                                    name="expserviciomecanica" disabled>
                                    <option value="">
                                           <?php echo $row["exp_servicio_mecanica"] ?>
                                     </option>                                    
                                </select>
                            </label>
                        </div>

                        
                        <label class="control-label col-md-2" for="expserviciomontallantas">
                            Servicio de
                            montallantas:
                        </label>
                        <div class="col-md-4">
                            <label>
                                <select class="form-control" name="expserviciomontallantas" id="expserviciomontallantas" disabled>
                                    <option value="">
                                        <?php echo $row["exp_servicio_montallantas"] ?>
                                    </option>                                    
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="explavadorcarro">Lavador de Carro:</label>
                        <div class="col-md-4">
                            <label>
                                <select class="form-control" name="explavadorcarro" id="explavadorcarro" disabled>
                                    <option value="">
                                        <?php echo $row["exp_lavador_carro"] ?>
                                    </option>                                    
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="expvendedordulce">Vendedor de dulce:</label>
                        <div class="col-md-4">
                            <label>
                                <select class="form-control" name="expvendedordulce" id="expvendedordulce" disabled>
                                    <option value="">
                                        <?php echo $row["exp_vendedor_dulces"] ?>
                                   </option>                                    
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="exprecreacionista">Recreacionista:</label>
                        <div class="col-md-4">
                            <label>
                                <select class="form-control" name="exprecreacionista" id="exprecreacionista" disabled>
                                    <option value="">
                                        <?php echo $row["exp_recreacionista"] ?>
                                    </option>                                    
                                </select>
                            </label>
                        </div>

                        <label class="control-label col-md-2" for="expsuministroalim">Suministro de alimentos:</label>
                        <div class="col-md-2">
                            <select class="form-control" name="expsuministroalim" id="expsuministroalim" disabled>                                
                                <option value="">
                                    <?php echo $row["exp_suministro_alim"] ?>
                                </option>                                
                            </select>
                        </div>

                        <label class="control-label col-md-4" for="ingresopromedio">
                            Cual es su ingreso promedio del mes:
                        </label>
                        <div class="col-md-2">
                          <input type="number" class="form-control" 
                                  id="ingresopromedio" name="ingresopromedio" value="<?php echo $row["ingreso_promedio"] ?>"
                                  disabled>
                        </div>

                        <label class="control-label col-md-4" for="gastopromedio">
                            Cual es su gasto promedio del mes:
                        </label>

                        <div class="col-md-2">
                             <input type="number" class="form-control" 
                                  id="gastospromedio" name="gastospromedio" value="<?php echo $row["gasto_promedio"] ?>"
                                  disabled>
                        </div>
                    
                    
                    
                    </div>
                </div>
    </fieldset>
     <legend>4. Observaciones</legend>
        <div class="form-group">
                <div class="input-group">
                    <label class="control-label col-md-6" for="dependenciaeconomica">
                        Cuantas personas depende
                        economicamente de su actividad laboral :
                    </label>
                    <div class="col-md-6">
                        <div class="text">
                            <textarea class="form-control" name="dependenciaeconomica"
                                id="dependenciaeconomica" disabled>
                                <?php echo $row["dependencia_economica"] ?>                            
                            </textarea>
                        </div>
                    </div>

                    <label class="control-label col-md-6" for="tiempomototaxismo">
                        Cuanto tiempo lleva ejerciendo el
                        mototaxismo:
                    </label>
                    <div class="col-md-6">
                        <div class="text">
                            <textarea class="form-control" name="tiempomototaxismo"
                                id="tiempomototaxismo" disabled>
                              <?php echo $row["tiempo_mototaxismo"] ?>                           
                            </textarea>
                        </div>
                    </div>

                      <label class="control-label col-md-5" for="actividadrentable">
                        Considera usted que el mototaxismo es una actividad rentable para la economia de su hogar:
                        (Explique)
                    </label>
                    <div class="col-md-1">
                        <div class="radio">
                            <label>
                                <input type="radio" name="actividadrentable" id="actividadrentable" value="" checked="checked">
                                        <?php echo $row["actividad_rentable"] ?>                                        
                            </label>
                        </div>                     
                    </div>

                    <div class="col-md-6">
                        <div class="text">
                            <textarea class="form-control" name="justificacion" id="justificacion" disabled>
                                    <?php echo $row["actividad_rentable_razones"] ?>
                            </textarea>
                        </div>                   
                    </div>

                    <label class="control-label col-md-4" for="fechadiligenciamiento">Fecha De Diligenciamiento :</label>
                    <input class="form-control col-md-2" type="date" id="fechadiligenciamiento" name="fechadiligenciamiento"
                    value="<?php echo $row["fecha_diligenciamiento"] ?>" disabled>
                     
                    </input>


                </div>
        </div>






                    <?php } ?>   <!-- final de la consulta principal--no borrar -->
               <div class="form-group" class="col-md-12">
            <center>
                <button type="submit" class="btnSubmit btn btn-primary btn-lg btn-block">Final de Formulario</button>
            </center>
    
    </body>
    </html>

<?php
mysqli_close($conexion); // Cerramos la conexion con la base de datos
?>