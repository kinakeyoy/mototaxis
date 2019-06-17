<?php
require ("conexion.php");

$nombreform=$_POST['nombre']; 
$ccform=$_POST['cc'];
$celularform=$_POST['celular'];
$generoform=$_POST['genero'];
$edadform=$_POST['edad'];
$estadocivilform=$_POST['estadocivil'];
$lugarnacimientoform=$_POST['lugarnac'];
$religionform=$_POST['religion'];
$barrioform=$_POST['barrio'];
$estratoform=$_POST['estrato'];
$personashogarform=$_POST['personashogar'];
$personascargoform=$_POST['personascargo'];
$personastrabajanform=$_POST['personastrabajan'];
$regimenseguridadsocialform=$_POST['regimenseguridadsocial'];
$epsform=$_POST['eps'];
$cotizapensionform=$_POST['cotizapension'];
$tiempopensionform=$_POST['tiempopension'];
$fpensionform=$_POST['fpension'];
$niveleducativoform=$_POST['niveleducativo'];
$tiempoterminadoform=$_POST['tiempoterminado'];
$tituloobtenidoform=$_POST['tituloobtenido'];
$ocupacionform=$_POST['ocupacion'];
$tiempoexperienciaform=$_POST['tiempoexperiencia'];
$tipovinculacionform=$_POST['tipovinculacion'];
$cursoform=$_POST['curso'];
$entidadform=$_POST['entidad'];
$cursoarecibirform=$_POST['cursoarecibir'];
$entidadcapaciteform=$_POST['entidadcapacite'];
$tipoviviendaform=$_POST['tipovivienda'];
$acabadosform=$_POST['acabados'];
$financiacionviviendaform=$_POST['financiacionvivienda'];
$habitacionesviviendaform=$_POST['habitacionesvivienda'];
if (isset($_POST["sp_1"])) {
   $sp_1form=$_POST['sp_1'];
} else {
   $sp_1form='Sin Agua Potable';
}
if (isset($_POST["sp_2"])) {
   $sp_2form=$_POST['sp_2'];
} else {
   $sp_2form='Sin Alcantarilllado';
}
if (isset($_POST["sp_3"])) {
   $sp_3form=$_POST['sp_3'];
} else {
   $sp_3form='Sin Energia electrica';
}
if (isset($_POST["sp_4"])) {
   $sp_4form=$_POST['sp_4'];
} else {
   $sp_4form='Sin Tv Cable';
}
if (isset($_POST["sp_5"])) {
   $sp_5form=$_POST['sp_5'];
} else {
   $sp_5form='Sin Internet';
}
if (isset($_POST["sp_6"])) {
   $sp_6form=$_POST['sp_6'];
} else {
   $sp_6form='Sin Telefono Fijo';
}
$actprincipalspubform=$_POST['actprincipalspub'];
$actprincipalsparform=$_POST['actprincipalspar'];
$tiempoexpspubform=$_POST['tiempoexpspub'];
$tiempoexpsparform=$_POST['tiempoexpspar'];
$actividadcomplementariaform=$_POST['actividadcomplementaria'];
$tiempoexpcomplemform=$_POST['tiempoexpcomplem'];
$perteneceorganizacionform=$_POST['perteneceorganizacion'];
$cualorganizacionnform=$_POST['cualorganizacion'];
$caracterizadoform=$_POST['caracterizado'];
$entidadcaracterizoform=$_POST['entidadcaracterizo'];
$evalresponsabilidadform=$_POST['evalresponsabilidad'];
$evalautoestimaform=$_POST['evalautoestima'];
$evalsociabilidadform=$_POST['evalsociabilidad'];
$evalintegridadform=$_POST['evalintegridad'];
$evalamabilidadform=$_POST['evalamabilidad'];
$ingresosfamiliarform=$_POST['ingresosfamiliar'];
$otrosingresosfamiliarform=$_POST['otrosingresosfamiliar'];
$gastosfamiliaform=$_POST['gastosfamilia'];
$tahorroform=$_POST['tahorro'];
$licenciaconduccionform=$_POST['licenciaconduccion'];
$tarjetadepropiedadform=$_POST['tarjetadepropiedad'];
$soatform=$_POST['soat'];
$tecnicomecanicaform=$_POST['tecnicomecanica'];
$matriculadoform=$_POST['matriculado'];
$cargoadtivoform=$_POST['cargoadtivo'];
$expserviciomecanicaform=$_POST['expserviciomecanica'];
$expserviciomontallantasform=$_POST['expserviciomontallantas'];
$explavadorcarroform=$_POST['explavadorcarro'];
$expvendedordulceform=$_POST['expvendedordulce'];
$exprecreacionistaform=$_POST['exprecreacionista'];
$expsuministroalimform=$_POST['expsuministroalim'];
$ingresopromedioform=$_POST['ingresopromedio'];
$gastospromedioform=$_POST['gastospromedio'];
$dependenciaeconomicaform=$_POST['dependenciaeconomica'];
$tiempomototaxismoform=$_POST['tiempomototaxismo'];
$actividadrentableform=$_POST['actividadrentable'];
$justificacionform=$_POST['justificacion'];
$fechadiligenciamientoform=$_POST['fechadiligenciamiento'];


if ($conexion){
	echo "<div>
    <script type='text/javascript'>
        console.log('Conectado a base de datos desde cargar');
    </script>
</div>";


/* insertamos el registro para cada tabla */
$inserciondatos="INSERT INTO personas
 (cedula,
 nombre,
 celular,
 genero,
 edad,
 estado_civil,
 id_municipio2,
 id_religion,
 id_barrio,
 estrato,
 personas_hogar,
 personas_cargo,
 personas_trabajan,
 seguridad_social,
 id_eps,
 cotiza_pension,
 tiempo_pension,
 id_fondo_pension,
 id_nivel_educativo,
 tiempo_terminado,
 id_titulo,
 ocupacion,
 tiempo_experiencia,
 vinculacion,
 id_curso,
 id_entidad,
 id_curso_recibir,
 id_entidad_capacite,
 id_tipo_vivienda,
 id_tipo_acabado,
 id_financiacion_vivienda,
 habitaciones_vivienda,
 servicios_publicos_1,
 servicios_publicos_2,
 servicios_publicos_3,
 servicios_publicos_4,
 servicios_publicos_5,
 servicios_publicos_6,
 act_principal_spub,
 act_principal_spart,
 tiempo_exp_spub,
 tiempo_exp_spart,
 actividad_complementaria,
 tiempo_exp_complem,
 pertenece_organizacion,
 cual_organizacion,
 caracterizado,
 entidad_caracterizo,
 eval_responsabilidad,
 eval_autoestima,
 eval_socialibidad,
 eval_integridad,
 eval_amabilidad,
 ingresos_familiar,
 otros_ingresos_familiar,
 gastos_familiar,
 ahorro_familiar,
 licencia_conduccion,
 tarjeta_propiedad,
 soat,
 tecnico_mecanica,
 matriculado,
 id_cargo,
 exp_servicio_mecanica,
 exp_servicio_montallantas,
 exp_lavador_carro,
 exp_vendedor_dulces,
 exp_recreacionista,
 exp_suministro_alim,
 ingreso_promedio,
 gasto_promedio,
 dependencia_economica,
 tiempo_mototaxismo,
 actividad_rentable,
 actividad_rentable_razones,
 fecha_diligenciamiento
 ) 
 VALUES
  ('$ccform',
	'$nombreform',
	'$celularform',
	'$generoform',
	'$edadform',
	'$estadocivilform',
	'$lugarnacimientoform',
	'$religionform',
	'$barrioform',
	'$estratoform',
	'$personashogarform',
	'$personascargoform',
	'$personastrabajanform',
	'$regimenseguridadsocialform',
	'$epsform',
	'$cotizapensionform',
	'$tiempopensionform',
	'$fpensionform',
	'$niveleducativoform',
	'$tiempoterminadoform',
	'$tituloobtenidoform',
	'$ocupacionform',
	'$tiempoexperienciaform',
	'$tipovinculacionform',
	'$cursoform',
	'$entidadform',
	'$cursoarecibirform',
	'$entidadcapaciteform',
	'$tipoviviendaform',
	'$acabadosform',
	'$financiacionviviendaform',
	'$habitacionesviviendaform',
	'$sp_1form',
	'$sp_2form',
	'$sp_3form',
	'$sp_4form',
	'$sp_5form',
	'$sp_6form',
	'$actprincipalspubform',
	'$actprincipalsparform',
	'$tiempoexpspubform',
	'$tiempoexpsparform',
	'$actividadcomplementariaform',
	'$tiempoexpcomplemform',
	'$perteneceorganizacionform',
	'$cualorganizacionnform',
	'$caracterizadoform',
	'$entidadcaracterizoform',
	'$evalresponsabilidadform',
	'$evalautoestimaform',
	'$evalsociabilidadform',
	'$evalintegridadform',
	'$evalamabilidadform',
	'$ingresosfamiliarform',
	'$otrosingresosfamiliarform',
	'$gastosfamiliaform',
	'$tahorroform',
	'$licenciaconduccionform',
	'$tarjetadepropiedadform',
	'$soatform',
	'$tecnicomecanicaform',
	'$matriculadoform',
	'$cargoadtivoform',
	'$expserviciomecanicaform',
	'$expserviciomontallantasform',
	'$explavadorcarroform',
	'$expvendedordulceform',
	'$exprecreacionistaform',
	'$expsuministroalimform',
	'$ingresopromedioform',
	'$gastospromedioform',
	'$dependenciaeconomicaform',
	'$dependenciaeconomicaform',
	'$actividadrentableform',
	'$justificacionform',
	'$fechadiligenciamientoform')";
		if(mysqli_query($conexion,$inserciondatos))
		{
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
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Datos Agregados!</strong> 
					<a href="sadmin.php">
	  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
  						</button>
					</a>
					</div>
				  </body>
				  </html>';
			}			
			else{
					echo "No Inserto Datos".mysqli_error($conexion);
                }
			 } else{
             echo "No se Conecto a base de datos desde cargar";
			}

// mysqli_free_result($result); // Liberamos los registros
mysqli_close($conexion); // Cerramos la conexion con la base de datos
?>