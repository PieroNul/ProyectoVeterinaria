<?php

$vlNombre=$_POST['txtNombre'];
$vlApellido=$_POST['txtApellidos'];
$vlDireccion=$_POST['txtDireccion'];
$vlCiudad=$_POST['txtCiudad'];
$vlCodigoPostal=$_POST['txtCodigoPostal'];
$vlTelefono=$_POST['txtTelefono'];

$vlQueryCrear="insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) values('".$vlNombre."','".$vlApellido."','".$vlDireccion."','".$vlCiudad."','".$vlCodigoPostal."','".$vlTelefono."');";

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
		header("Location: ../View/frmNuevaMascota.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>