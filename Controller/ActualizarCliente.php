<?php

$vlIdCliente=$_POST['txtCodCliente'];
$vlNombre=$_POST['txtNombre'];
$vlApellido=$_POST['txtApellidos'];
$vlDireccion=$_POST['txtDireccion'];
$vlCiudad=$_POST['txtCiudad'];
$vlCodigoPostal=$_POST['txtCodigoPostal'];
$vlTelefono=$_POST['txtTelefono'];

$vlQueryUpdate="update Cliente set Nombres='".$vlNombre."',Apellidos='".$vlApellido."',Direccion='".$vlDireccion."',Ciudad='".$vlCiudad."',CodigoPostal='".$vlCodigoPostal."',Telefono='".$vlTelefono."' where ID_Cliente=".$vlIdCliente.";";

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
		header("Location: ../View/frmMantenimientoCliente.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>