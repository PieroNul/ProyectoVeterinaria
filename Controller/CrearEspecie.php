<?php

$vlNombre=$_POST['txtNombre'];

$vlQueryCrear="insert into TipoMascota(Tipo) values ('".$vlNombre."');";

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
		header("Location: ../View/frmMantenimientoAnimal.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>