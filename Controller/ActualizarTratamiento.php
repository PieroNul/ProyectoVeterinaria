<?php

$vlId=$_POST['txtCod'];
$vlTratamiento=$_POST['txtTratamiento'];
$vlPrecio=$_POST['txtPrecio'];

$vlQueryUpdate="update Tratamiento set Tratamiento='".$vlTratamiento."',Precio=".$vlPrecio." where ID_Tratamiento=".$vlId.";";

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
		header("Location: ../View/frmMantenimientoTratamiento.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>