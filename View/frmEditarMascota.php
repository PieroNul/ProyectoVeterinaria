<!DOCTYPE html>
<html>
<head>
	<title>Edicion de Productos</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../CSS/style.css">
  	<link rel="stylesheet" href="../CSS/botones.css">
</head>
<body>
	<form method="POST" action="../Controller/ActualizarMascota.php">
	<div class="container">
		<h2>ACTUALIZACION DE LA MASCOTA</h2>
<?php 
$idClienteMascota= $_POST['txtId'];
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "select * from Mascota_Cliente where ID_MascotaCliente=".$idClienteMascota."";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
			?>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtCodMascota" name="txtCodMascota" placeholder="<?php echo $vlRegistro['ID_MascotaCliente']; ?>" value="<?php echo $vlRegistro['ID_MascotaCliente'];?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtCliente" name="txtCliente" value="<?php echo $vlRegistro['ID_Cliente']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $vlRegistro['NombreMascota']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtTipo" name="txtTipo" value="<?php echo $vlRegistro['ID_TipoMacota']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtRaza" name="txtRaza" value="<?php echo $vlRegistro['ID_Raza']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtFecha" name="txtFecha" value="<?php echo $vlRegistro['FechaNacimiento']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtSexo" name="txtSexo" value="<?php echo $vlRegistro['Sexo']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtColor" name="txtColor" value="<?php echo $vlRegistro['Color']; ?>">
				</div>
				<div class="form-group">
					<label for="txtEsterilizado" style="color:white;">Esterilizado</label>
					<select name="txtEsterilizado"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>Si</option>
						<option>No</option>					
					<select/>
				</div>
				<div class="form-group">
					<label for="txtLongitud" style="color:white;">Longitud</label>
					<input type="text" class="form-control" id="txtLongitud" name="txtLongitud" value="<?php echo $vlRegistro['Longitud']; ?>">
				</div>
				<div class="form-group">
					<label for="txtPeso" style="color:white;">Peso</label>
					<input type="text" class="form-control" id="txtPeso" name="txtPeso" value="<?php echo $vlRegistro['peso']; ?>">
				</div>
				<div class="form-group">
					<label for="txtVacunas" style="color:white;">Vacunas</label>
					<select name="txtVacunas"class="form-control">
						<option>-- SELECCIONAR OPCION  --</option>
						<option>Si</option>
						<option>No</option>					
					<select/>
				</div>
				<div>
					<button type="submit" class="Piero"><span class="Piero2"></span>ACTUALIZAR REGISTRO</button>
				</div>
			</div>				
			<?php
		}
	}
}
?>
</form>
</body>
</html>