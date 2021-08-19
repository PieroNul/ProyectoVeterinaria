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
	<form method="POST" action="../Controller/ActualizarCliente.php">
	<div class="container">
		<h2 style="color:white;">ACTUALIZACION DE CLIENTE</h2>
<?php 
$idCliente= $_POST['txtId'];
include '../Model/cConexion.php';
if (!$vlConexion) {
	die ("<h3> Error en la conexion con la base de datos </h3>");
} else {
	$vlQuerySelect = "select * from Cliente where ID_Cliente=".$idCliente."";
	$vlEjecucion = mysqli_query($vlConexion,$vlQuerySelect);
	if (mysqli_num_rows($vlEjecucion)>0) {
		while($vlRegistro =mysqli_fetch_assoc($vlEjecucion)){
			?>
				<div class="form-group">
					<input type="hidden" class="form-control" id="txtCodCliente" name="txtCodCliente" placeholder="<?php echo $vlRegistro['ID_Cliente']; ?>" value="<?php echo $vlRegistro['ID_Cliente'];?>">
				</div>
				<div class="form-group">
					<label for="txtNombre" style="color:white;">Nombre del Cliente</label>
					<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $vlRegistro['Nombres']; ?>">
				</div>
				<div class="form-group">
					<label for="txtApellidos" style="color:white;">Apellidos</label>
					<input type="text" class="form-control" id="txtApellidos" name="txtApellidos" value="<?php echo $vlRegistro['Apellidos']; ?>">
				</div>
				<div class="form-group">
					<label for="txtDireccion" style="color:white;">Direccion</label>
					<input type="text" class="form-control" id="txtDireccion" name="txtDireccion" value="<?php echo $vlRegistro['Direccion']; ?>">
				</div>
				<div class="form-group">
					<label for="txtCiudad" style="color:white;">Ciudad</label>
					<input type="text" class="form-control" id="txtCiudad" name="txtCiudad" value="<?php echo $vlRegistro['Ciudad']; ?>">
				</div>
				<div class="form-group">
					<label for="txtCodigoPostal" style="color:white;">Codigo Postal</label>
					<input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal" value="<?php echo $vlRegistro['CodigoPostal']; ?>">
				</div>
				<div class="form-group">
					<label for="txtTelefono" style="color:white;">Telefono</label>
					<input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="<?php echo $vlRegistro['Telefono']; ?>">
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