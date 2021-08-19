<?php

$vlNombre=$_POST['txtNombre'];
$vlDoctor=$_POST['txtDoctor'];
$vlTratamiento=$_POST['txtTratamiento'];
$vlTipo=$_POST['txtTipo'];
$vlTotal=$_POST['txtTotal'];
$vlPago=$_POST['txtPago'];

$vlQueryCrear="insert into Visitas(ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago) values(".$vlNombre.",".$vlDoctor.",".$vlTratamiento.",'".$vlTipo."',sysdate(),".$vlTotal.",'".$vlPago."');";

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
		header("Location: ../View/frmMantenimientoVisita.php");
		exit;
	}else{
		echo "Error de conexion".mysqli_error($vlConexion);
	}
}
mysqli_close($vlConexion);
?>