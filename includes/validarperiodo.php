
<?php
$hostname_conexion_smile = "localhost";
$database_conexion_smile = "db_smile";
$username_conexion_smile = "root";
$password_conexion_smile = "";

$conexion_smile = @mysql_connect($hostname_conexion_smile, $username_conexion_smile, $password_conexion_smile) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_conexion_smile,$conexion_smile);

$inputperiodojs = $_POST['inputperiodojs'];
$band=0;
if (isset($inputperiodojs) && $inputperiodojs!="") {
	$separaperiodo= explode('-', $inputperiodojs);      
    $anioperiodoing = $separaperiodo[0];
    $mesperiodoing = $separaperiodo[1];
}
else{
    $anioperiodoing=date("Y");
    $mesperiodoing =date("m");
}
$anioperiodoing;
$mesperiodoing;
$anioactual=date("Y");

if ($anioperiodoing>=$anioactual) {

	$empleados="SELECT * FROM empleado
	WHERE idempleado!=1 AND estado=1 ORDER BY idempleado DESC LIMIT 0,1";
	$q_empleados=mysql_query($empleados);
	$row_empleado=mysql_fetch_array($q_empleados);
	$idempleado=$row_empleado['idempleado'];

	$liquidaciones="SELECT * FROM liquidacion 
	WHERE empleado_idempleado=$idempleado";
	$q_liquidacion=mysql_query($liquidaciones);

	while ($row_liquidaciones=mysql_fetch_array($q_liquidacion)) {

		$separaperiodoliq= explode('-', $row_liquidaciones['fechaliquidacion']);     
   		$mesperiodoliq = $separaperiodoliq[1]; 
   		if ($mesperiodoliq==$mesperiodoing) {
   			$band=1;
   		} 	
	}
	 echo $band;
}

else echo $band=1;

?>