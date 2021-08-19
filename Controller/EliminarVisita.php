<?php

$vlId=$_POST['txtId'];

$vlQueryDelete="update visitas set estado=0 where ID_Visita=".$vlId.";";

$vlServidor="localhost";
$vlUser="root";
$vlPassword="12345678";
$vlBaseDatos="FINAL_VETERINARIA";

$vlConexion = new mysqli($vlServidor,$vlUser,$vlPassword,$vlBaseDatos);

if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	if (mysqli_query($vlConexion,$vlQueryDelete)) {
		echo "Se Elimino correctamente el registro";
		header("Location: ../View/frmMantenimientoVisita.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>