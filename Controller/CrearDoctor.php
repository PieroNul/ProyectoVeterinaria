<?php

$vlNombre=$_POST['txtNombre'];
$vlApellido=$_POST['txtApellidos'];
$vlTelefono=$_POST['txtTelefono'];
$vlDireccion=$_POST['txtDireccion'];
$vlCorreo=$_POST['txtCorreo'];

$vlQueryCrear="insert into Doctor(nombre,apellido,telefono,direccion,correo) VALUES ('".$vlNombre."','".$vlApellido."','".$vlTelefono."','".$vlDireccion."','".$vlCorreo."');";

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
		header("Location: ../View/frmMantenimientoDoctor.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>