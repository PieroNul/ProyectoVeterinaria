<?php

$vlId=$_POST['txtCod'];
$vlMedicacion=$_POST['txtMedicacion'];
$vlDescripcion=$_POST['txtDescripcion'];
$vlPrecio=$_POST['txtPrecio'];

$vlQueryUpdate="update Medicacion set Medicacion='".$vlMedicacion."',decripcion='".$vlDescripcion."',Precio=".$vlPrecio." where ID_Medicacion=".$vlId.";";

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
		header("Location: ../View/frmMantenimientoMedicacion.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>