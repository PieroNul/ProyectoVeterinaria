<?php

$vlIdMascota=$_POST['txtCodMascota'];
$vlEsterilizado=$_POST['txtEsterilizado'];
$vLongitud=$_POST['txtLongitud'];
$vlPeso=$_POST['txtPeso'];
$vlVacunas=$_POST['txtVacunas'];

$vlQueryUpdate="update Mascota_Cliente set Esterilizado='".$vlEsterilizado."',Longitud='".$vLongitud."',peso='".$vlPeso."',Vacunas='".$vlVacunas."' where ID_MascotaCliente=".$vlIdMascota.";";

$vlServidor="localhost";
$vlUser="root";
$vlPassword="12345678";
$vlBaseDatos="FINAL_VETERINARIA";

$vlConexion = new mysqli($vlServidor,$vlUser,$vlPassword,$vlBaseDatos);

if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	if (mysqli_query($vlConexion,$vlQueryUpdate)) {
		echo "Se Modifico correctamente el registro";
		header("Location: ../View/frmMantenimientoMascota.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>