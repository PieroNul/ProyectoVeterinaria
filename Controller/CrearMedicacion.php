<?php

$vlNombre=$_POST['txtNombre'];
$vlDescripcion=$_POST['txtDescripcion'];
$vlPrecio=$_POST['txtPrecio'];

$vlQueryCrear="insert into Medicacion(Medicacion,decripcion,Precio) VALUES('".$vlNombre."','".$vlDescripcion."',".$vlPrecio.");";

$vlServidor="localhost";
$vlUser="root";
$vlPassword="12345678";
$vlBaseDatos="FINAL_VETERINARIA";

$vlConexion = new mysqli($vlServidor,$vlUser,$vlPassword,$vlBaseDatos);

if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	if (mysqli_query($vlConexion,$vlQueryCrear)) {
		echo "Se Creo correctamente el registro";
		header("Location: ../View/frmNuevoTratamiento.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>