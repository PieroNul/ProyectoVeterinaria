<?php

$vlNombre=$_POST['txtId'];
$vlNombreM=$_POST['txtNombreM'];
$vlTipo=$_POST['txtTipo'];
$vlRaza=$_POST['txtRaza'];
$vlFechaNac=$_POST['txtfechaNac'];
$vlSexo=$_POST['txtSexo'];
$vlColor=$_POST['txtColor'];
$vlEsterilizado=$_POST['txtEsterilizado'];
$vlLongitud=$_POST['txtLongitud'];
$vlPeso=$_POST['txtPeso'];
$vlVacunas=$_POST['txtVacunas'];

$vlQueryCrear="insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) values(".$vlNombre.",'".$vlNombreM."',".$vlTipo.",".$vlRaza.",'".$vlFechaNac."','".$vlSexo."','".$vlColor."','".$vlEsterilizado."','".$vlLongitud."','".$vlPeso."','".$vlVacunas."');";

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
		header("Location: ../View/frmMantenimientoMascota.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>