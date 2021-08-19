<?php

$vlId=$_POST['txtCod'];
$vlNombre=$_POST['txtNombre'];
$vlApellido=$_POST['txtApellidos'];
$vlTelefono=$_POST['txtTelefono'];
$vlDireccion=$_POST['txtDireccion'];
$vlCorreo=$_POST['txtCorreo'];

$vlQueryUpdate="update Doctor set nombre='".$vlNombre."',apellido='".$vlApellido."',Telefono='".$vlTelefono."',direccion='".$vlDireccion."',correo='".$vlCorreo."' where ID_Doctor=".$vlId.";";

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
		header("Location: ../View/frmMantenimientoDoctor.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>